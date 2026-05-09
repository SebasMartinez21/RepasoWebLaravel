<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ControlAcceso
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $productID = $request->route('products');

        $product = Product::find($productID);

        if($product->user_id != Auth::id()){
            return abort(403, 'Error → No tienes permiso para modificar este recurso');
        }
        
        return $next($request);
    }
}
