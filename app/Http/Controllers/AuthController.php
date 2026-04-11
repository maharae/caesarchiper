<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function authenticate(Request $request)
    {
        $kredensial = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($kredensial)) {
            $request->session()->regenerate();

            return redirect('/dashboard'); // hanya redirect
        }

        return back()->withErrors(['message' => 'Invalid credentials']);
    }

    public function showLoginForm()
    {
        if (session()->has('is_logged_in')) {
            return redirect('/login');
        }
        return view('login');
    }
}
