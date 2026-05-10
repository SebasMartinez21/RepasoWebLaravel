<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Team;

class validarRegistros
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $total_teams = Team::count();
        $teams_date = Team::where('is_active', '1')->where('created_date', '>', '2004-07-01')->count();

        if($total_teams > 25 && $teams_date >= 10){
            return $next($request);
        }

        abort(403, "La tabla no cumple con las condiciones de registros...");
    }
}
