<?php

namespace App\Http\Controllers\Admin\Catalog;

use App\Http\Controllers\Controller;
use App\Model\Catalog\CompanyBranchOffice;
use App\Model\Catalog\CompanyBranchOfficeAddressPhoneType;
use App\Model\Catalog\CompanyBranchOfficeContact;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CompanyBranchOfficeContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = CompanyBranchOfficeContact::all();

        return view('admin.catalog.'.parent::getRouteActual().'.index', compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $branchOffices = CompanyBranchOffice::pluck('name', 'id');
        $types         = CompanyBranchOfficeAddressPhoneType::pluck('name', 'id');

        return view('admin.catalog.'.parent::getRouteActual().'.create', compact('branchOffices', 'types'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $contact = CompanyBranchOfficeContact::create(
         [
          'first_name'               => $request->first_name,
          'last_name'                => $request->last_name,
          'email'                    => $request->email,
          'company_branch_office_id' => $request->branch_office,
         ]
        );


        $phones = !is_null($request->phones) ? $request->phones : [];
        if (count($phones) > 0) {
            foreach ($phones as $phone) {
                $contact->phones()->create(['phone' => $phone]);
            }
        }
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
        $branchOffices = CompanyBranchOffice::pluck('name', 'id');
        $types         = CompanyBranchOfficeAddressPhoneType::pluck('name', 'id');
        $contact       = CompanyBranchOfficeContact::findOrFail($id);

        return view('admin.catalog.'.parent::getRouteActual().'.edit', compact('branchOffices', 'types', 'contact'));
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
        $contact = CompanyBranchOfficeContact::findOrFail($id);
        $contact->update(
         [
          'first_name'               => $request->first_name,
          'last_name'                => $request->last_name,
          'email'                    => $request->email,
          'company_branch_office_id' => $request->branch_office,
         ]
        );
        $contact->phones()->delete();
        $phones = !is_null($request->phones) ? $request->phones : [];
        if (count($phones) > 0) {
            foreach ($phones as $phone) {
                $contact->phones()->create(['phone' => $phone]);
            }
        }

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
        $contact = CompanyBranchOfficeContact::findOrFail($id);
        $contact->delete();

        flash(trans('general.message.destroy'))->error();

        return redirect()->route(parent::getRouteActual().'.index');
    }

    public function getDatatable()
    {
        $contacts      = CompanyBranchOfficeContact::all();
        $valid_contact = collect();
        $phones        = collect();
        foreach ($contacts as $contact) {

            foreach ($contact->phones as $phone) {
                $phones->push(['phone' => $phone->phone]);
            }

            $valid_contact->push(
             [
              'id'            => $contact->id,
              'name'          => $contact->full_name,
              'email'         => $contact->email,
              'created_at'    => $contact->created_at_format,
              'branch_office' => $contact->branch_office->name,
              'phones'        => $phones,

             ]
            );

            $phones = collect();
        }
        $datatable = DataTables::of($valid_contact)->make(true);

        return $datatable;

    }
}
