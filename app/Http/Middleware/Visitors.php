<?php

namespace App\Http\Middleware;

use App\Models\Visitor;
use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Visitors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $ip = hash('sha512', $request->ip());
        if (!session()->has($ip)){
            $visitorsCount = Visitor::whereDate('created_at', Carbon::today())->first();
            if (!$visitorsCount)
            {
                Visitor::create([
                    'count' => 1,
                ]);
                Session::put($ip, $ip);
            }else{
                Session::put($ip, $ip);
                $visitorsCount->update([ 'count' => DB::raw('count + 1')]);
            }
        }
        return $next($request);
    }

}
