<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        if ($email === 'admin@gmail.com' && $password === '123456') {
            session(['user' => $email]);

            return redirect('/dashboard');
        }

        return back()->with('error', 'Email یا Password غلط دی!');
    }

    public function dashboard()
    {
        if (!session()->has('user')) {
            return redirect('/login');
        }

        return view('dashboard');
    }

    public function logout()
    {
        session()->forget('user');

        return redirect('/login');
    }
}