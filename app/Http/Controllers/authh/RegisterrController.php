<?php

namespace App\Http\Controllers\authh;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Validator;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Loginn;

class RegisterrController extends Controller
{
    public function registerr(){
        return view('authh.registerr');
    }

    public function store(Request $request){

        if($request->password != $request->retypepassword) {
            $request->session()->flash('error', 'Passwords not match!');
            return back()->withInput();
        }
        
        $validator = Validator::make($request->all(), [
            'username' => 'required|string',
            'password' => 'required|regex: /^.*(?=.{7,})(?=.*[a-zA-z])(?=.*[0-9])(?=.*[!@#$%^&*()_+]).*$/',
            'email' => 'required|unique:loginn,email'
        ]);

        if($validator->fails()){
            $request->session()->flash('error', $validator->messages()->all()[0]);
            return back()->withInput();
        }

        $loginn = new Loginn;

        $loginn->username = $request['username'];
        $loginn->email = $request['email'];
        $loginn->password = Hash::make($request['password']);

        $loginn ->save();
        $request->session()->flash('reset', 'Register was successful!');
        // return view('authh.loginn');
        return redirect('/loginn');
    }
}
