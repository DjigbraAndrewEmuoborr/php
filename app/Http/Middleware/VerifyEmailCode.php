<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerifyEmailCode
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
        $user = Auth::user();
        if (!$user->hasVerifiedEmail()) {
            return redirect(route('user.verifycode'));
        }
        elseif (empty($user->account)) {
            return response()->view('accounts.kyc.kyc-form');
        }
        elseif (!$user->account->skip_id) {
            if (empty($user->account->id_submitted)) {
                return response()->view('accounts.kyc.verifyid');
            }
        }
        return $next($request);
    }
}
