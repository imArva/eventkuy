<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function SignIn(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            if (Auth::user()->role_pengguna === 'Organizer') {
                return redirect()->intended('/Dashboard');
            } elseif (auth()->user()->role_pengguna === 'Admin') {
                return redirect()->intended('/DashboardAdmin');
            }
            return redirect()->intended('/Dashboardcus');
        } else {
            return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
        }
    }

    public function signUp(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|same:confirm_password',
            'confirm_password' => 'required|string|min:8',
            'role_pengguna' => 'required|string|in:Customer,Organizer',
        ]);

        \App\Models\User::create($validator);

        return redirect('/SignIn')->with('success', 'Registration successful. Please sign in.');
    }

    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/Dashboardcus');
    }
}