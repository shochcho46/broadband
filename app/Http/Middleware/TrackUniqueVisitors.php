<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;

class TrackUniqueVisitors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        $sessionKey = 'visitor_' . md5($request->ip());

        if (!Session::has($sessionKey)) {
            Session::put($sessionKey, true);
            $this->incrementVisitorCount();
        }

        return $next($request);
    }

    protected function incrementVisitorCount()
    {
        $visitorCount = Cache::get('unique_visitor_count', 0);
        Cache::put('unique_visitor_count', $visitorCount + 1, now()->addDays(1));
    }
}
