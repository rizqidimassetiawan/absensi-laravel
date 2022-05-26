<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
 
    public function index(){
        return view('panel.auth.login');
    }
    public function authentication(Request $request){
        
        $credential = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credential)){
            $request->session()->regenerate();
            // $data = User::with('unit');
            return redirect()->intended('/dashboard');
        }

        return back()->with('loginFailed','Gagal Login');
    }

    public function logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');   
    }
}