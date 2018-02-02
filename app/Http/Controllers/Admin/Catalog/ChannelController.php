<?php

namespace App\Http\Controllers\Admin\Catalog;

use App\Catalog\Category;
use App\Catalog\Channel;
use App\Catalog\ChannelCategory;
use App\Catalog\Type;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ChannelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $channels = Channel::get();


        return view('admin.catalog.channel.index')->with(['channels' => $channels]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name', 'id');
        $types = Type::pluck('name', 'id');
        return view('admin.catalog.' . parent::getRouteActual() . '.create', compact('categories', 'types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $channel = new Channel($request->only(['name', 'code']));
        $channel->type_id = $request->type;
        $channel->save();
        foreach ($request->categories as $category) {
            ChannelCategory::create([
                'channel_id' => $channel->id,
                'category_id' => $category
            ]);
        }
        flash(trans('general.message.success'))->success();
        return redirect()->route(parent::getRouteActual() . '.index');
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
        $channel = Channel::findOrFail($id);
        $categories = Category::pluck('name', 'id');
        $types = Type::pluck('name', 'id');
        return view('admin.catalog.' . parent::getRouteActual() . '.edit', compact('categories', 'types', 'channel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $channel = Channel::findOrFail($id);
        $channel->update($request->only(['name', 'code']));
        $channel->type_id = $request->type;
        $channel->category()->sync($request->categories);
        $channel->save();
        flash(trans('general.message.edit'))->success();
        return redirect()->route(parent::getRouteActual() . '.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $channel = Channel::findOrFail($id);
        $channel->delete();
        flash(trans('general.message.destroy'))->error();
        return redirect()->route(parent::getRouteActual() . '.index');
    }

    public function getDatatable()
    {
        $channels = Channel::all();
        $valid_channel = collect();
        $valid_category = collect();
        foreach ($channels as $channel) {
            if ($channel->category->count() > 0) {
                foreach ($channel->category as $category)
                    $valid_category->push($category->name);
            }

            $valid_channel->push([
                'id' => $channel->id,
                'name' => $channel->name,
                'channel' => $channel->code,
                'type' => !is_null($channel->type) ? $channel->type->name : 'Sin tipo',
                'category' => $valid_category,
                'status' => $channel->status,
                'plans' => $channel->plans,
            ]);
            $valid_category = collect();
        }
        $datatable = DataTables::of($valid_channel)->make(true);
        return $datatable;
    }
}
