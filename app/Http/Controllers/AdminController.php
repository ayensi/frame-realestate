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
    public function writeJson($filename,$event){
        // read the file if present
        $handle = @fopen($filename, 'r+');

// create the file if needed
        if ($handle === null)
        {
            $handle = fopen($filename, 'w+');
        }

        if ($handle)
        {
            // seek to the end
            fseek($handle, 0, SEEK_END);

            // are we at the end of is the file empty
            if (ftell($handle) > 0)
            {
                // move back a byte
                fseek($handle, -3, SEEK_END);

                // add the trailing comma
                fwrite($handle, ",", 1);

                // add the new json string
                fwrite($handle, "\n \t".'"'.$event["key"].'"' . " : " .'"'. $event["value"].'"'."\n"."} ");
            }
            else
            {
                // write the first event inside an array
                fwrite($handle, json_encode(array($event)));
            }

            // close the handle on the file
            fclose($handle);
        }
    }
    public function turkceget(){
        $file = file_get_contents(base_path("/lang/tr.json"));
        $obj = json_decode($file);
        return view('admin.turkce',with(compact('obj')));
    }
    public function turkcestore(Request $request){
        $data["key"] = $request->key;
        $data["value"] = $request->value;
        $this->writeJson(base_path('/lang/tr.json'),$data);
        return redirect(route('turkceget'));
    }
    public function englishget(){
        $file = file_get_contents(base_path("/lang/en.json"));
        $obj = json_decode($file);
        return view('admin.english',with(compact('obj')));
    }
    public function englishstore(Request $request){
        $data["key"] = $request->key;
        $data["value"] = $request->value;
        $this->writeJson(base_path('/lang/en.json'),$data);
        return redirect(route('englishget'));
    }
    public function login(){
        if(Auth::check()){
            return redirect(route('dashboard'));
        }
        return view('vendor.adminlte.auth.login');
    }
    /*
    public function register(){
        return view('vendor.adminlte.auth.register');
    }*/
    public function loginPost(Request $request){

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            return redirect()->intended(route('dashboard'));
        }
        else{
            return redirect(route('login'));
        }
    }
    /*public function registerPost(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:teams',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|min:6',
        ]);

        $data = $request->only('email','password','name','password_confirmation');

        $this->userService->register($data);

        return redirect(route('dashboard'))->withSuccess(__('registered'));
    }*/
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
