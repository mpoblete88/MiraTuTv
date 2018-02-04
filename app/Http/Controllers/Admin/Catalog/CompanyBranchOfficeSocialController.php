<?php

namespace App\Http\Controllers\Admin\Catalog;

use App\Model\Catalog\CompanyBranchOffice;
use App\Model\Catalog\CompanyBranchOfficeSocial;
use App\Model\Catalog\CompanyBranchOfficeSocialType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;

class CompanyBranchOfficeSocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $social = CompanyBranchOfficeSocial::all();

        return view('admin.catalog.'.parent::getRouteActual().'.index', compact('social'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $branchOffices = CompanyBranchOffice::pluck('name', 'id');
        $types         = CompanyBranchOfficeSocialType::pluck('name', 'id');

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

        CompanyBranchOfficeSocial::create(
         [
          'url'                      => $request->url,
          'type_id'                  => $request->type,
          'company_branch_office_id' => $request->branch_office,
         ]
        );


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
        $social        = CompanyBranchOfficeSocial::findOrFail($id);
        $branchOffices = CompanyBranchOffice::pluck('name', 'id');
        $types         = CompanyBranchOfficeSocialType::pluck('name', 'id');

        return view(
         'admin.catalog.'.parent::getRouteActual().'.edit',
         compact('branchOffices', 'types', 'contact', 'social')
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
        $social = CompanyBranchOfficeSocial::findOrFail($id);
        $social->update(
         [
          'url'                      => $request->url,
          'type_id'                  => $request->type,
          'company_branch_office_id' => $request->branch_office,
         ]
        );


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
        $social = CompanyBranchOfficeSocial::findOrFail($id);
        $social->delete();

        flash(trans('general.message.destroy'))->error();

        return redirect()->route(parent::getRouteActual().'.index');
    }

    public function getDatatable()
    {
        $socials = CompanyBranchOfficeSocial::with(['type', 'branch_office'])->get();

        $datatable = DataTables::of($socials)->make(true);

        return $datatable;

    }
}
