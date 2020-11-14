<?php

namespace App\Http\Middleware;

use Closure;

class CekRole
{

  /**
   * Handle an incoming request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \Closure  $next
   * @return mixed
   */
  public function handle($request, Closure $next)
  {
    $user = \App\User::where('email', $request->email)->first();
    if ($user->status == 'admin') {
      return redirect('admin/dashboard');
    } elseif ($user->status == 'user') {
      return redirect('user/dashboard');
    }

    return $next($request);
  }
}
