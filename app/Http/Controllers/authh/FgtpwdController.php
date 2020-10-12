<?php

namespace App\Http\Controllers\authh;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Loginn;
use Illuminate\Support\Facades\Hash;
use Validator;

class FgtpwdController extends Controller
{
    public function fgtpwd(){
        return view('authh.fgtpwd');
    }

    public function reset(Request $request){
        if($request->newpassword != $request->retypepassword) {
            $request->session()->flash('error', 'New Passwords not match!');
            return back()->withInput();
        }

        $validator = Validator::make($request->all(), [
            'email' => 'required|string',
            'newpassword' => 'required|regex: /^.*(?=.{7,})(?=.*[a-zA-z])(?=.*[0-9])(?=.*[!@#$%^&*()_+]).*$/'
        ]);

        if($validator->fails()){
            $request->session()->flash('error', $validator->messages()->all()[0]);
            return back()->withInput();
        }

        $users = Loginn::all();
        foreach($users as $user){
            if($user->email == $request->email){
                if(Hash::check($request->oldpassword, $user->password))
                    $current = $user->id;
                else{
                    $request->session()->flash('error', 'Credentials mismatch!');
                    // return $user->password . $request->oldpassword;
                    return back()->withInput();
                } 
            }
        }

        $currentUser = Loginn::find($current);
        $currentUser->password = Hash::make($request->newpassword);
        $currentUser->save();
        $request->session()->flash('reset', 'Reset Password Successful!');

        return redirect('/loginn');
    }
}
