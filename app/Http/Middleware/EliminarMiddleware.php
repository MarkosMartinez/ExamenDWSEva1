<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Manzana;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\LOG;

class EliminarMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $manzana = Manzana::find($request->id);
        LOG::info("Manzana eliminada!");
        LOG::info("ID: ".$manzana->id);
        LOG::info("Tipo: ".$manzana->tipomanzana);
        LOG::info("Precio/Kilo: ".$manzana->preciokilo);
        return $next($request);
    }
}
