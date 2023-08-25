<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\VarDumper\Caster\RedisCaster;

class AuthController extends Controller
{
    public function page()
    {
        return view('landing-page');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function loginuser(Request $request)
    {
        if (Auth::attempt($request->only(
            'notelpon',
            'password'
        ))) {
            return redirect('home');
        } else {
            $request->session()->flash('login_error', 'Nomor telepon atau password salah');
            return redirect('/login');
        }

        return \redirect('login')->with('flash_message_error', 'Nomor Telepon atau password anda salah !');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function registeruser(Request $request)
    {
        $notelpon = $request->notelpon;
        $check = User::where([
            ['notelpon', '=', $notelpon]
        ])->first();

        if ($check) {
            $request->session()->flash('duplicate', 'Nomor Telepon sudah ada');
            return redirect('/register');
        } else {
            $this->validate($request, [
                'nama' => 'required|max:100',
                'notelpon' => 'required|numeric',
                'password' => 'required|min:5|max:20',
            ]);
            User::create([
                'nama' => $request->nama,
                'notelpon' => $request->notelpon,
                'password' => bcrypt($request->password),
                'remember_token' => Str::random(60),
            ]);
            return redirect('/login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return \redirect('login');
    }
=======
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    public function loginuser(Request $request) {
        if (Auth::attempt($request->only(
            'notelpon','password'
        ))) {
            return redirect('home');
        }
 
        return \redirect('home');
    }

    public function register(){
        return view('auth.register');
    }

    public function registeruser(Request $request){
        $this->validate($request,[
            'nama' => 'required|max:100',
            'notelpon' => 'required|min:10|max:13',
            'password'=> 'required|min:5|max:20',
        ]);
        User::create([
            'nama'=>$request->nama,
            'notelpon'=>$request->notelpon,
            'password'=>bcrypt($request->password),
            'remember_token'=>Str::random(60),
        ]);
        return redirect('/login');
    }

    public function logout(){
        Auth::logout();
        return \redirect('login');
    }

    public function edit(){
        return view('edit.profile');
    }
>>>>>>> d26556bb9c0e02a6aa372ac2b44b92d28baf54db
}
