<?php

namespace App\Http\Controllers\Admin\Catalog;

use App\Model\Catalog\Property;
use App\Model\Catalog\Commune;
use App\Model\Catalog\Company;
use App\Model\Catalog\CompanyBranchOffice;
use App\Model\Catalog\CompanyBranchOfficeAddress;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class CompanyBranchOfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company_branch_offices = CompanyBranchOffice::all();

        return view('admin.catalog.company_branch_office.index')->with(compact('company_branch_offices'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $properties = Property::pluck('name', 'id');
        $communes   = Commune::orderBy('name')->get()->pluck('name', 'id');

        return view('admin.catalog.company_branch_office.create', compact('properties', 'communes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $companyBranchOffice             = new CompanyBranchOffice($request->only(['name', 'rut']));
        $companyBranchOffice->company_id = Company::firstOrFail()->id;
        $companyBranchOffice->status     = $request->status == 1 ? 'active' : 'inactive';
        $companyBranchOffice->save();

        $companyBranchOfficeAddress                           =
         new CompanyBranchOfficeAddress($request->only(['address', 'number', 'property_number']));
        $companyBranchOfficeAddress->company_branch_office_id = $companyBranchOffice->id;
        $companyBranchOfficeAddress->property_id              = $request->property;
        $companyBranchOfficeAddress->commune_id               = $request->commune;
        $full_address                                         =
         $companyBranchOfficeAddress->address.' '.$companyBranchOfficeAddress->number.' '.$companyBranchOfficeAddress->commune->name.' '.$companyBranchOfficeAddress->commune->province->region->name.' '.$companyBranchOfficeAddress->commune->province->region->country->nicename;
        $companyBranchOfficeAddress->latitude                 = parent::getCoordinate($full_address)['lat'];
        $companyBranchOfficeAddress->longitude                = parent::getCoordinate($full_address)['lng'];
        $companyBranchOfficeAddress->save();
        flash(trans('validation.success'))->success();

        return redirect()->route('company_branch_office.index');
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

        $company_branch_office = CompanyBranchOffice::findOrFail($id);
        $properties            = Property::pluck('name', 'id');
        $communes              = Commune::orderBy('name')->get()->pluck('name', 'id');

        return view(
         'admin.catalog.company_branch_office.edit',
         compact('company_branch_office', 'properties', 'communes')
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int                      $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $companyBranchOffice = CompanyBranchOffice::findOrFail($id);
        $companyBranchOffice->update($request->only(['name', 'rut']));
        $companyBranchOffice->status = $request->status == 1 ? 'active' : 'inactive';
        $companyBranchOffice->save();

        $companyBranchOfficeAddress = $companyBranchOffice->address;
        $companyBranchOfficeAddress->update($request->only(['address', 'number', 'property_number']));
        $companyBranchOfficeAddress->company_branch_office_id = $companyBranchOffice->id;
        $companyBranchOfficeAddress->property_id              = $request->property;
        $companyBranchOfficeAddress->commune_id               = $request->commune;
        $full_address                                         =
         $companyBranchOfficeAddress->address.' '.$companyBranchOfficeAddress->number.' '.$companyBranchOfficeAddress->commune->name.' '.$companyBranchOfficeAddress->commune->province->region->name.' '.$companyBranchOfficeAddress->commune->province->region->country->nicename;
        $companyBranchOfficeAddress->latitude                 = parent::getCoordinate($full_address)['lat'];
        $companyBranchOfficeAddress->longitude                = parent::getCoordinate($full_address)['lng'];
        $companyBranchOfficeAddress->save();

        flash(trans('validation.success'))->success();

        return redirect()->route('company_branch_office.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company_branch_office = CompanyBranchOffice::findOrFail($id);
        $company_branch_office->update(
         [
          'status' => $company_branch_office->status == 'active' ? 'inactive' : 'active',
         ]
        );
        $company_branch_office->save();

        flash(trans('validation.destroy'))->error();

        return redirect()->route('company_branch_office.index');
    }

    public function getDatatable()
    {
        $companyBranchOffice = CompanyBranchOffice::with(['company', 'address', 'socials', 'contacts'])->get();
        $valid_offices       = collect();
        $phones              = collect();
        $socials             = collect();
        foreach ($companyBranchOffice as $office) {

            foreach ($office->address->phones as $phone) {
                $phones->push(
                 [
                  'phone' => $phone->country->phonecode.''.$phone->phone,
                 ]
                );
            }

            foreach ($office->socials as $social) {
                $socials->push(
                 [
                  'social' => $social->url,
                  'type'   => $social->type->name,
                 ]
                );
            }

            $valid_offices->push(
             [
              'id'           => $office->id,
              'name'         => $office->name.' '.$office->rut,
              'address'      => $office->address->address.' '.$office->address->number,
              'phones'       => $phones->count() == 0 ? 'Sin registros' : $phones,
              'socials'      => $socials->count() == 0 ? 'Sin registros' : $socials,
              'status_color' => $office->status_color,
              'status_label' => $office->status_label,

             ]
            );
            $phones = collect();
        }
        $datatable = DataTables::of($valid_offices)->make(true);

        return $datatable;
    }
}
