<?php
namespace App\Http\ViewComposers;

use App\Menu;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
/**
 * Created by PhpStorm.
 * User: jsDotx3
 * Date: 23/01/2018
 * Time: 20:46
 */

class MenuComposers
{

    protected $menu;

    public function __construct(Menu $menu)
    {
        $this->menu = $menu;
    }

    public function compose(View $view)
    {
        $menu = $this->menu->get()->where('parent_id', null);
        $user = Auth::user();
        $view->with(
            ['menu' => $menu,
            'user' => $user
            ]);
    }
}