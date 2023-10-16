<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectPengelolaanOrPengajuan
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->session()->has('admin')) {
            return redirect("/pengelolaan-layanan/data-tera/{$request->tera}");
        }

        return redirect("/pengajuan-layanan/data-tera/{$request->tera}");
    }
}
