<?php

namespace App\Http\Controllers\Admin\Catalog;

use App\Http\Requests\CompanyBranchOfficePhoneRequest;
use App\Model\Catalog\Country;
use App\Model\Catalog\CompanyBranchOffice;
use App\Model\Catalog\CompanyBranchOfficeAddressPhone;
use App\Model\Catalog\CompanyBranchOfficeAddressPhoneType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class CompanyBranchOfficePhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companyBranchOfficePhones = CompanyBranchOfficeAddressPhone::all();
        return view('admin.catalog.' . parent::getRouteActual() . '.index', compact('companyBranchOfficePhones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $branchOffices = CompanyBranchOffice::pluck('name', 'id');
        $countries = Country::pluck('nicename', 'id');
        $types = CompanyBranchOfficeAddressPhoneType::pluck('name','id');
        return view('admin.catalog.' . parent::getRouteActual() . '.create', compact('branchOffices', 'countries', 'types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyBranchOfficePhoneRequest $request)
    {
        $companyBranchOfficePhones = new CompanyBranchOfficeAddressPhone();
        $companyBranchOfficePhones->phone = $request->phone;
        $companyBranchOfficePhones->company_branch_office_address_id = $request->branch_office;
        $companyBranchOfficePhones->type_id = $request->type_phone;
        $companyBranchOfficePhones->country_code_id = $request->country;
        $companyBranchOfficePhones->save();

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
        $phone = CompanyBranchOfficeAddressPhone::findOrFail($id);
        $branchOffices = CompanyBranchOffice::pluck('name', 'id');
        $countries = Country::pluck('nicename', 'id');
        $types = CompanyBranchOfficeAddressPhoneType::pluck('name','id');
        return view('admin.catalog.' . parent::getRouteActual() . '.edit', compact('phone','branchOffices', 'countries', 'types'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyBranchOfficePhoneRequest $request, $id)
    {
        $companyBranchOfficePhones = CompanyBranchOfficeAddressPhone::findOrFail($id);
        $companyBranchOfficePhones->phone = $request->phone;
        $companyBranchOfficePhones->company_branch_office_address_id = $request->branch_office;
        $companyBranchOfficePhones->type_id = $request->type_phone;
        $companyBranchOfficePhones->country_code_id = $request->country;
        $companyBranchOfficePhones->save();

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
        $companyBranchOfficePhones = CompanyBranchOfficeAddressPhone::findOrFail($id);
        $companyBranchOfficePhones->delete();
        flash(trans('general.message.destroy'))->error();
        return redirect()->route(parent::getRouteActual() . '.index');
    }


    public function getDatatable()
    {
    $phones = CompanyBranchOfficeAddressPhone::with(['branch_office_address.company_branch_office','country', 'type'])->get();
    $valid_phones = collect();

    foreach($phones as $phone)
    {
        $valid_phones->push([
            'id' => $phone->id,
            'phone' => $phone->phone,
            'country' => $phone->country->nicename,
            'type' => $phone->type->name,
            'branch_office' => $phone->branch_office_address->company_branch_office->name,
        ]);
    }
    $datatable = DataTables::of($valid_phones)->make(true);
    return $datatable;
    }
}
