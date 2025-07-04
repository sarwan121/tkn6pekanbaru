<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    //
    function index(){
        return view('auth.login');
    }

    function login(Request $request){
        Session::flash('name', $request->name);
        $request->validate([
            // proses pengecekan/validasi
            // required artinya di perlukan
            'name' =>'required',
            'password' =>'required',

        ],[
            'name.required' =>'nama Wajib di isi',
            'password.required' =>'Password Wajib di isi',
        ]);
        // proses autentifikasi
        $infologin=[
            // mengambil data
            'name'=>$request->name,
            'password'=>$request->password
        ];
        if(Auth::attempt($infologin)){
            return redirect('dashboard')->with('success', 'Selamat datang ' . Auth::user()->name . '. Anda berhasil login sebagai admin.');
            
        }else{
            // kalau autentifikasi gagal
            return redirect('auth')->withErrors('name atau password salah');
            // return "gagal";
            
        }
    }
    function logout(){
        Auth::logout();
        return redirect('auth')->with('success',' Berhasil Logout');
    }
}
