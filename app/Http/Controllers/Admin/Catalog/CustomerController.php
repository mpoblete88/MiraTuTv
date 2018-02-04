<?php

namespace App\Http\Controllers\Admin\Catalog;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerRequest;
use App\Model\Catalog\Customer;
use Yajra\DataTables\Facades\DataTables;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::get();


        return view('customer.catalog.customer.index')->with(['customers' => $customers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.catalog.customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomerRequest $request)
    {
        $dtpBorn = date('Y-m-d', strtotime($request->dtpBorn));
        $customer = Customer::create([
            'first_name' => $request->txtNames,
            'last_name' => $request->txtLastNames,
            'nick_name' => $request->txtNameUser,
            'email' => $request->txtEmail,
            'password' => bcrypt($request->txtPassword),
            'birthdate' => $dtpBorn,
            'rut' => $request->txtRut,
        ]);

        $customer->save();

        flash('Se ha creado exitosamente al Cliente')->success();

        return redirect()->route('app_customers.index');


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
        $customer = Customer::findOrFail($id);
        return view('customer.catalog.customer.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(CustomerRequest $request, $id)
    {
        $dtpBorn = date('Y-m-d', strtotime($request->dtpBorn));

        $customer = Customer::findOrFail($id);
        $customer->update([
            'first_name' => $request->txtNames,
            'last_name' => $request->txtLastNames,
            'nick_name' => $request->txtNameUser,
            'email' => $request->txtEmail,
            'password' => !is_null($request->txtPassword) ? bcrypt($request->txtPassword) : $customer->password,
            'birthdate' => $dtpBorn,
            'rut' => $request->txtRut,
        ]);

        flash('Se ha editado exitosamente al Cliente')->success();

        return redirect()->route('app_customers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->update([
            'status' => $customer->status == 'active' ? 'inactive' : 'active'
        ]);
        $customer->save();
        flash('Se ha desactivado la cuenta')->error();
        return redirect()->route('app_customers.index');
    }

    public function getDatatable()
    {
        $customers = Customer::all();
        $datatable = DataTables::of($customers)->make(true);
        return $datatable;
    }
}
