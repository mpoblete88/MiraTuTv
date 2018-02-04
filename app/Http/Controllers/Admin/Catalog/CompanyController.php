<?php

namespace App\Http\Controllers\Admin\Catalog;

use App\Http\Requests\CompanyRequest;
use App\Model\Catalog\Company;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = Company::firstOrFail();

        return view('admin.catalog.company.index', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int                      $id
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyRequest $request, $id)
    {

        $company             = Company::firstOrFail();
        $company->name       = $request->name;
        $company->short_name = $request->short_name;
        $company->web_site   = $request->web_site;
        if (!is_null($request->favicon_path)) {
            $imageName = "favicon.".$request->file('favicon_path')->getClientOriginalExtension();
            $path      = public_path('/');
            $request->file('favicon_path')->move(
             $path,
             $imageName
            );
            $company->favicon_path = $imageName;

        }

        if (!is_null($request->logo_path)) {
            $imageName = "logo.".$request->file('logo_path')->getClientOriginalExtension();
            $path      = public_path().'/images\company/';

            $request->file('logo_path')->move(
             $path,
             $imageName
            );
            $attachment_path    = 'images\company/'.$imageName;
            $company->logo_path = $attachment_path;

        }

        if (!is_null($request->logo_dark_path)) {
            $imageName = "logoDark.".$request->file('logo_dark_path')->getClientOriginalExtension();
            $path      = public_path().'/images\company/';
            $request->file('logo_dark_path')->move(
             $path,
             $imageName
            );
            $attachment_path         = 'images\company/'.$imageName;
            $company->logo_dark_path = $attachment_path;


        }
        if (!is_null($request->logo_light_path)) {
            $imageName = "logoLight.".$request->file('logo_light_path')->getClientOriginalExtension();
            $path      = public_path().'/images\company/';
            $request->file('logo_light_path')->move(
             $path,
             $imageName
            );
            $attachment_path          = 'images\company/'.$imageName;
            $company->logo_light_path = $attachment_path;
        }
        $company->save();
        flash(trans('general.message.success'))->success();

        return redirect()->route(parent::getRouteActual().'.index');


    }


}
