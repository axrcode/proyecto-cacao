<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login()
    {
        $credenciales = $this->validate(request(), [
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if ( Auth::attempt($credenciales) ) {
            return redirect()->route('dashboard');
        }

        return back()
            ->withErrors(['email' => trans('auth.failed')])
            ->withInput(request(['email']));
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('auth.index');
    }
}
