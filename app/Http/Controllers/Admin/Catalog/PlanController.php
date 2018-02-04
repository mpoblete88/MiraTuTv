<?php

namespace App\Http\Controllers\Admin\Catalog;

use App\Model\Catalog\Channel;
use App\Model\Catalog\Plan;
use App\Http\Requests\PlanRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plans = Plan::get();


        return view('admin.catalog.plan.index')->with(['plans'=>$plans]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $channels = Channel::pluck('name', 'id');
        return view('admin.catalog.' . parent::getRouteActual() . '.create', compact('channels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PlanRequest $request)
    {
        $plan = Plan::create($request->only(['name','code','description']));
        $plan->channels()->sync($request->channels);
        flash(trans('general.message.success'))->success();
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
        $plan = Plan::findOrFail($id);
        $channels = Channel::pluck('name', 'id');
       return view('admin.catalog.' . parent::getRouteActual() . '.edit', compact('channels', 'plan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PlanRequest $request, $id)
    {
        $plan = Plan::findOrFail($id);
        $plan->update($request->only(['name','code','description']));
        $plan->channels()->sync($request->channels);
        flash(trans('general.message.success'))->success();
        return redirect()->route(parent::getRouteActual() . '.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plan = Plan::findOrFail($id);
        $plan->delete();
        flash(trans('general.message.destroy'))->error();
        return redirect()->route(parent::getRouteActual() . '.index');
    }

    public function getDatatable()
    {
        $plans = Plan::with('channels')->get();
        $datatables = DataTables::of($plans)->make(true);
        return $datatables;
    }
}
