<?php

namespace App\Http\Controllers\Admin\Catalog;

use App\Http\Controllers\Controller;
use App\Model\System\SystemMaintenance;
use Illuminate\Http\Request;

class SystemMaintenanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maintenance = SystemMaintenance::firstOrFail();
        $url         = "https://www.googleapis.com/webfonts/v1/webfonts?key=AIzaSyD0WeCrLlAkyd006Hbg2CDAgwONp489EC4";
        $result      = json_decode(file_get_contents($url));
        $font_list   = [];
        foreach ($result->items as $font) {
            if ($font->category == 'sans-serif') {
                $font_list[] = [
                 'font_name'        => $font->family,
                 'category_channel' => $font->category,
                 'variants'         => implode(', ', $font->variants),
                ];
            }
        }
        $fontsGoogleCollection = collect($font_list);
        $fontsGoogle           = $fontsGoogleCollection->pluck('font_name', 'font_name');

        return view('admin.catalog.system_maintenance.index', compact('maintenance', 'fontsGoogle'));
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
        $maintenance = SystemMaintenance::findOrFail($id);
        $maintenance->update(
         [
          'title'             => $request->txtTitle,
          'subtitle'          => $request->txtSubTitle,
          'background_color'  => $request->txtBackgroundColor,
          'description'       => $request->txtDescription,
          'footer'            => $request->txtFooter,
          'title_color'       => $request->txtTitleColor,
          'subtitle_color'    => $request->txtSubtitleColor,
          'footer_text_color' => $request->txtFooterColor,
          'font_family'       => $request->txtFontFamily,
          'status'            => !is_null($request->isActivate) ? 'active' : 'inactive',
         ]
        );
        $maintenance->save();
        flash('Se ha actualizado el mantenimiento.')->success();

        return redirect()->route('system_maintenance.index');
    }

}
