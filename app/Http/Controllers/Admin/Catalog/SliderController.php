<?php

namespace App\Http\Controllers\Admin\Catalog;

use App\Modules\Slider;
use App\Modules\SliderAttachment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::get();


        return view('admin.catalog.' . parent::getRouteActual() . '.index')->with(['sliders'=>$sliders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.catalog.' . parent::getRouteActual() . '.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slider = Slider::create($request->except('attachment'));
        flash(trans('general.message.success'))->success();

        $imageName = time().'.'.$request->file('attachment')->getClientOriginalName();
        $path = base_path().'\storage\app\public\attachments\sliders/'.$slider->id.'/';
        $archiveFinal = $path.$imageName;
        $request->file('attachment')->move(
            $path,
            $imageName
        );
        $typeAttachment = mime_content_type($archiveFinal);
        $typeAttachmentExplode = explode("/", $typeAttachment);
        $sliderAttachment = new SliderAttachment();
        $sliderAttachment->slider_id = $slider->id;
        $sliderAttachment->file_name = $imageName;
        $sliderAttachment->size = filesize($archiveFinal);
        $sliderAttachment->format_file = $typeAttachmentExplode[1];
        $sliderAttachment->path = $path.$imageName;
        $sliderAttachment->save();

        $slider->save();
        return redirect()->route(parent::getRouteActual() . '.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);
        $slider->delete();
        flash(trans('general.message.destroy'))->error();
        return redirect()->route(parent::getRouteActual() . '.index');
    }
    public function getDataTable()
    {
        $sliders = Slider::all();
        $datatable = DataTables::of($sliders)->make(true);
        return $datatable;
    }
}
