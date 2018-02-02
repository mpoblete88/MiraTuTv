<?php

namespace App\Http\ViewComposers;

use Illuminate\Support\Facades\Request;
use Illuminate\View\View;

/**
 * Created by PhpStorm.
 * User: jsDotx3
 * Date: 23/01/2018
 * Time: 20:46
 */
class SectionAdminComposers
{


    public function compose(View $view)
    {
        $route = $expl = explode(".", Request::route()->getName())[0];
        $view->with(
            ['route' => $route]);
    }
}