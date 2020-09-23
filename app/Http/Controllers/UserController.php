<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Gate;

class UserController extends Controller
{
    public function _construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        // $user = User::find(1);
        // return $user->roles()->get();
        return view('staff.admin.index')->with('users', $users);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        if(Gate::denies('edit-users')){
            return redirect( route('admins.index') );
        }

        $user = User::find($id);
        $roles = Role::all();
        return view('staff.admin.edit')->with([
            'user' => $user,
            'roles' => $roles
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->roles()->sync($request->roles);

        if($user->save()){
            $request->session()->flash('success', $user->name . " has been updated!");
        }else{
            $request->session()->flash('error', "An error occurred when updating the user");
        }

        return redirect()->route('admins.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Gate::denies('delete-users')){
            return redirect( route('admins.index') );
        }

        $user = User::find($id);
        $user->roles()->detach();

        return redirect()->route('admins.index');
    }
}
