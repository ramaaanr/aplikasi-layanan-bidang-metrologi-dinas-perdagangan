<?php

namespace App\Http\Middleware;

use App\Models\Admin;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OnlyAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->session()->has('admin')) {
            $session = session()->get('admin');
            $remember_token = Admin::where('remember_token', $session['remember_token'])->first();
            if ($remember_token != null) return $next($request);
            return redirect('/');
        }
        return redirect('/');
    }
}
