<?php

namespace App\Http\Controllers\Admin\Catalog;

use App\Model\Catalog\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest;
use Yajra\DataTables\Facades\DataTables;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Admin::get();


        return view('admin.catalog.admin.index')->with(['admins' => $admins]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.catalog.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminRequest $request)
    {
        $admin = Admin::create([
            'first_name' => $request->txtNames,
            'last_name' => $request->txtLastNames,
            'nick_name' => $request->txtNameUser,
            'email' => $request->txtEmail,
            'password' => bcrypt($request->txtPassword)
        ]);

        $admin->save();

        flash('Se ha creado exitosamente al Adminsitrador')->success();

        return redirect()->route('app_admins.index');
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
        $admin = Admin::findOrFail($id);
        return view('admin.catalog.admin.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminRequest $request, $id)
    {
        $admin = Admin::findOrFail($id);
        $admin->update([
            'first_name' => $request->txtNames,
            'last_name' => $request->txtLastNames,
            'nick_name' => $request->txtNameUser,
            'email' => $request->txtEmail]);

        if (!is_null($request->txtPassword))
            $admin->update(['password' => bcrypt($request->txtPassword)]);

        flash('Se ha actualizado correctamente')->success();

        return redirect()->route('app_admins.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin = Admin::findOrFail($id);
        $admin->update([
            'status' => $admin->status == 'active' ? 'inactive' : 'active',
        ]);
        flash('Se ha desactivado correctamente')->error();

        return redirect()->route('app_admins.index');
    }

    public function getDatatable()
    {
        $admins = Admin::all();
        $datatable = DataTables::of($admins)->make(true);
        return $datatable;
    }
}
