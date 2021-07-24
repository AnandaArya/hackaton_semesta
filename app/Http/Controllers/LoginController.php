<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Hash;

class LoginController extends Controller
{
    //
    public function index() {
        return view('home/index');
    }

    public function postLogin(Request $request) {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/home');
        } else {
            echo "<script>alert('password anda salah');</script>"; 
            return redirect('/');
        }

    }

    public function daftar()
    {
        return view('layouts/register');
    }

    public function store(Request $request)
    {

        $user = new User;
        // $user->id = $request->id;
        $user->name = $request->name;
        $user->level = 'user';
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();
        return redirect('login');
    }
    
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
    }
}
