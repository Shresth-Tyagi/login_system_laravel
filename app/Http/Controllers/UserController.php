<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index() {
        return view('welcome');
    }


    //registration method
    public function register(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',

        ]);

        $data['password'] = bcrypt($data['password']); // Hash password


        $user = User::create($data);

        if($user){
            return redirect()->route('login');
        }
    }

     //login method
    public function login(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',

        ]);

        if(Auth::attempt($credentials)){
            return redirect()->route('dashboard');
        }
        else {
            return redirect()->route('login')->withErrors('Invalid credentials');
        }
    }


     //page after login method
    public function dashboardPage(){
        if(Auth::check()){
            return view('dashboard');
        }
        else{
            return redirect()->route('login');
 
        }
    }
}
