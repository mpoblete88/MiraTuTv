<?php

namespace App\Http\Middleware;

use App\Model\System\SystemMaintenance;
use Closure;
use Illuminate\Http\Response;
use Illuminate\Routing\Route;
class MaintenanceMiddleware
{
    protected $excludedNames = [];
    protected $except = ['admin/*', 'admin'];
    protected $excludedIPs = [];
    protected function shouldPassThrough($request)
    {
        foreach ($this->except as $except) {
            if ($except !== '/') {
                $except = trim($except, '/');
            }
            if ($request->is($except)) {
                return true;
            }
        }
        return false;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (SystemMaintenance::firstOrFail()->status == 1) {
            $response = $next($request);
            $route = $request->route();
            if ($route instanceof Route) {
                if (in_array($route->getName(), $this->excludedNames)) {
                    return $response;
                }
            }
            if ($this->shouldPassThrough($request))
            {
                return $response;
            }
            return response()
             ->view('maintenance', [], 404)
             ->header('Content-Type', null);
        }
        return $next($request);
    }
}
