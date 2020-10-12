<?php

namespace App\Http\Controllers\res;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Loginn;
use App\Http\Resources\Loginn as LoginnResource;
use Illuminate\Support\Facades\Hash;
use Validator;

class LoginnResourceController extends Controller
{
    public function index(){
        $loginn = Loginn::all();
        return LoginnResource::collection($loginn);
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'username' => 'required|string',
            'password' => [
                'required',
                'regex: /^.*(?=.{7,})(?=.*[a-zA-z])(?=.*[0-9])(?=.*[!@#$%^&*()_+]).*$/'
            ],
            'email'=> 'required|loginn, email, '
        ]);

        if($validator->fails()){
            return response()->json(['isvalid'=>false,'errors'=>$validator->messages()]);
        }

        $loginn = new Loginn;

        $loginn->username = $request['username'];
        $loginn->email = $request['email'];
        $loginn->password = Hash::make($request['password']);

        $loginn ->save();
        return new LoginnResource($loginn);
    }
}
