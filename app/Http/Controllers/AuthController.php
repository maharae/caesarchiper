<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        if (session()->has('is_logged_in')) return redirect('/dashboard');
        return view('login');
    }

    public function authenticate(Request $request)
    {
        if ($request->username === 'tiara' && $request->password === '123') {
            // Tulis langsung ke session, bypass semua sistem Database Laravel
            session(['is_logged_in' => true, 'user' => 'tiara']);
            return redirect('/dashboard');
        }
        return back()->withErrors(['loginError' => 'Salah!']);
    }

    public function logout()
    {
        session()->forget(['is_logged_in', 'user']);
        return redirect('/login');
    }
}
