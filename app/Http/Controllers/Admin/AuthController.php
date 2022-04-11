<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return Redirect()->route('index');
           # code...
        }else {
            return redirect()->route('loginview')->with('danger','Email ou mot de passe incorrect');
        }
    }


    public function out(Request $request)//deconnexion
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        Auth::logout();
        return redirect()->route('loginview');
    }


    public function index(Request $request)
    {
       return view('admin.auth.login');
    }


}
