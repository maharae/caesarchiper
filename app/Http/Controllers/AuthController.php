<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        if (session()->has('is_logged_in')) {
            return redirect('/login');
        }
        return view('login');
    }

    public function authenticate(Request $request)
    {
        // if ($request->username === 'tiara' && $request->password === '123') {
        //     session(['is_logged_in' => true, 'user' => 'tiara']);
        //     return redirect('/dashboard');
        // }
        // return back()->withErrors(['loginError' => 'Salah!']);

        $kredensial = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($kredensial)) {
            $request->session()->regenerate();

            return redirect('/dashboard');
        }

        return back()->withErrors(['message' => 'Invalid credentials']);
    }

    public function logout()
    {
        session()->forget(['is_logged_in', 'user']);
        return redirect('/login');
    }
}
