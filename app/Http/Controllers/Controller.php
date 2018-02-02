<?php
    namespace App\Http\Controllers;
    use Illuminate\Foundation\Bus\DispatchesJobs;
    use Illuminate\Routing\Controller as BaseController;
    use Illuminate\Foundation\Validation\ValidatesRequests;
    use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
    class Controller extends BaseController
    {
        use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

        protected $routeActual;

        protected function getRouteActual()
        {
            $routeAs = \Route::getCurrentRoute()->action['as'];
            $explode_route = explode('.', $routeAs);
            return $explode_route[0];
        }
    }