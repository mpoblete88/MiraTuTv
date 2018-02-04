<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Spatie\Geocoder\Geocoder;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $routeActual;

    protected function getRouteActual()
    {
        $routeAs       = \Route::getCurrentRoute()->action['as'];
        $explode_route = explode('.', $routeAs);

        return $explode_route[0];
    }

    protected function getCoordinate($address)
    {
        $client   = new \GuzzleHttp\Client();
        $geocoder = new Geocoder($client);

        return $geocoder->getCoordinatesForAddress($address);
    }
}