<?php

namespace App\Http\Controllers;

use App\Http\Contracts\IUserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    private IUserService $userService;
    public function __construct(IUserService $userService)
    {
        $this->userService = $userService;
    }

    public function login(){
        if(Auth::check()){
            return redirect(route('dashboard'));
        }
        return view('vendor.adminlte.auth.login');
    }
    public function register(){
        return view('vendor.adminlte.auth.register');
    }
    public function loginPost(Request $request){
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials,$request->remember)) {
            return redirect()->intended(route('dashboard'));
        }
        else{
            return redirect(route('login'));
        }
    }
    public function registerPost(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|min:6',
        ]);

        $data = $request->only('email','password','name','password_confirmation');

        $this->userService->register($data);

        return redirect(route('dashboard'))->withSuccess(__('registered'));
    }
    public function dashboard(){
        return view('vendor.adminlte.page');
    }
    public function logout(){
        Auth::logout();
        return redirect(route('login'));
    }

    public function resetPassword(){
        return view('vendor.adminlte.auth.passwords.reset');
    }

    public function resetPasswordPost(Request $request){

    }

}
