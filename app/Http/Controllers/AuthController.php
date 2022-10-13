<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function registerForm()
    {
        return view('auth.register');
    }
    public function registers(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|min:2',
            'email' => 'required|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        Auth::login($user);
        return redirect()->to('/home')->with('successfully', 'you have register success');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->back()->with('successfully', 'you have logout success');
    }
    public function login(Request $request)
    {
        $check = Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ]);
        if (!$check) {
            return redirect()->back()->with('successfully', 'you have fail login ');
        }
        return redirect()->to('/home')->with('successfully', 'you have success login');
    }
    public function loginForm()
    {
        return view('auth.login');
    }
}