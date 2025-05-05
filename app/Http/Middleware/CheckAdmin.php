<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAdmin
{
    public function handle(Request $request, Closure $next): Response
    {
        // Cek apakah user sudah login
        if (!$request->user()) {
            return redirect('/login')->with('error', 'Silahkan login terlebih dahulu');
        }

        // Cek apakah user memiliki role 'admin'
        if ($request->user()->role !== 'admin') {
            abort(403, 'Unauthorized. Anda tidak memiliki akses ke halaman admin.');
        }

        return $next($request);
    }
}
