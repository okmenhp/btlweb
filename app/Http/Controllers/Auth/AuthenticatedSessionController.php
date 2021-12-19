<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        $page = "";
        if($request->all() != null){
            $page = $request->all()['page'];
            return view('auth.login', compact('page'));
        }
        return view('auth.login', compact('page'));
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();
        if($request->all()['page'] == "member" ){
            return redirect()->intended(RouteServiceProvider::HOME);
        }else if($request->all()['page'] == "game"){
            return redirect()->back()->with('mss','đăng nhập thành công');
        }
        return redirect()->route('admin.dashboard');
        // return redirect()->intended(RouteServiceProvider::ADMIN);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        if($request->all()['page'] == 'member')
            return redirect('/');
        return redirect('/admin');
    }
}
