<?php

namespace App\Http\Controllers\Admin\Catalog;

use App\Http\Requests\DecoderRequest;
use App\Model\Catalog\Decoder;
use App\Model\Catalog\Plan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Excel;
use Yajra\DataTables\Facades\DataTables;

class DecoderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $decoders = Decoder::all();

        return view('admin.catalog.'.parent::getRouteActual().'.index', compact('decoders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $plans = Plan::pluck('name', 'id');

        return view('admin.catalog.'.parent::getRouteActual().'.create', compact('plans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(DecoderRequest $request)
    {
        $decoder                = new Decoder();
        $decoder->name          = $request->name;
        $decoder->code          = $request->code;
        $decoder->serial_number = $request->serial_number;
        $decoder->plan_id       = $request->plan;
        $decoder->save();

        flash(trans('general.message.success'))->success();

        return redirect()->route(parent::getRouteActual().'.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $plans   = Plan::pluck('name', 'id');
        $decoder = Decoder::findOrFail($id);

        return view('admin.catalog.'.parent::getRouteActual().'.edit', compact('plans', 'decoder'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int                      $id
     * @return \Illuminate\Http\Response
     */
    public function update(DecoderRequest $request, $id)
    {
        $decoder                = Decoder::findOrFail($id);
        $decoder->name          = $request->name;
        $decoder->code          = $request->code;
        $decoder->serial_number = $request->serial_number;
        $decoder->plan_id       = $request->plan;
        $decoder->status        = !is_null($request->activo) ? 'active' : 'inactive';
        $decoder->save();

        flash(trans('general.message.success'))->success();

        return redirect()->route(parent::getRouteActual().'.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $decoder         = Decoder::findOrFail($id);
        $decoder->status = $decoder->status == 'active' ? 'inactive' : 'active';
        $decoder->save();
        if ($decoder->status == 'active') {
            flash(trans('general.message.recover'))->success();
        } else {
            flash(trans('general.message.destroy'))->error();
        }

        return redirect()->route(parent::getRouteActual().'.index');

    }

    public function multiple()
    {
        $plans = Plan::pluck('name', 'id');

        return view('admin.catalog.decoders.multiple', compact('plans'));
    }

    public function multiplePost(Request $request)
    {
        $imageName    = $request->file('archive')->getClientOriginalName();
        $path         = storage_path().'\archive/';
        $archiveFinal = $path.$imageName;
        $request->file('archive')->move(
         $path,
         $imageName
        );

        \Maatwebsite\Excel\Facades\Excel::load(
         $archiveFinal,
         function ($reader) use($request) {
             foreach ($reader->get() as $decoder) {
                 Decoder::create(
                  [
                   'name'          => $decoder->name,
                   'code'          => $decoder->code,
                   'serial_number' => $decoder->serial_number,
                   'plan_id'       => $request->plan
                  ]
                 );
             }
         }
        );
        flash(trans('general.message.success'))->success();
        return redirect()->route('decoders.index');
    }


    public function getDatatable()
    {
        $decoder   = Decoder::with('plan')->get();
        $datatable = DataTables::of($decoder)->make(true);

        return $datatable;
    }
}
