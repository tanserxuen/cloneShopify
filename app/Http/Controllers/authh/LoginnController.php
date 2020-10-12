<?php

namespace App\Http\Controllers\authh;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use App\Http\Resources\Loginn as LoginnResource;
use Illuminate\Support\Facades\Hash;
use App\Loginn;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class LoginnController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('CheckAuth');
    // }

    public function loginn(){
        // $request->session()->get('logged_in');
        return view('authh.loginn');
    }

    public function checkAuth(Request $request){
        $usr = $request->input('username');
        $pwd = $request->input('password');
        $users = Loginn::all();

        foreach($users as $user){
            if($user->username==$usr){
                if(Hash::check($pwd, $user->password)){
                    Session::put('logged_in', $user);
                    $request->session()->flash('success', 'Login Successful!');
                    $current = $user;
                    return redirect('/test')->with('user', $user);
                }
            }
        }
        $request->session()->flash('error', 'Credentials unmatch!');
        return redirect('/loginn')->with('success','Login Successful!');
    }

    public function logout(Request $request){
        $request->session()->flush();
        $request->session()->forget('logged_in');
        return redirect('/loginn');
    }

}
