<?php

namespace App\Http\Controllers\Admin\Catalog;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::get();


        return view('admin.catalog.user.index')->with(['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.catalog.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::create([
            'first_name' => $request->txtNames,
            'last_name' => $request->txtLastNames,
            'nick_name' => $request->txtNameUser,
            'email' => $request->txtEmail,
            'password' => bcrypt($request->txtPassword),
        ]);

        flash('Se ha creado el usuario de forma exitosa')->success();
        return redirect()->route('users.index');
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
        $user = User::findOrFail($id);
        return view('admin.catalog.user.edit', compact('user'));
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
        $user = User::findOrFail($id);
        $user->update([
            'first_name' => $request->txtNames,
            'last_name' => $request->txtLastNames,
            'nick_name' => $request->txtNameUser,
            'email' => $request->txtEmail,
            'password' => !is_null($request->txtPassword) ? bcrypt($request->txtPassword) : $user->password,
        ]);

        flash('Se ha actualizado correctamente el usuario')->success();
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->update([
            'status' => $user->status == 'active' ? 'inactive' : 'active'
            ]);
        flash('Se ha desactivado al usuario')->error();
        return redirect()->route('users.index');
    }

    public function getDatatable()
    {
        $users = User::all();
        $datatable = DataTables::of($users)->make(true);
        return $datatable;
    }
}
