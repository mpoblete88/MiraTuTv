<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        \Form::macro(
         'selectMultiple',
         function ($name, $options, $selected, $attributes = [], $tag = false) {
             return view('admin.partials.form.select')->with(
              [
               'name'       => $name,
               'attributes' => $attributes,
               'options'    => $options,
               'selected'   => $selected,
               'tag'        => $tag,
              ]
             );

         }
        );
        \Form::macro(
         'colorPicker',
         function ($name, $selected, $attributes = []) {
             return view('admin.partials.form.color')->with(
              [
               'name'       => $name,
               'attributes' => $attributes,
               'selected'   => $selected,
              ]
             );

         }
        );
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
