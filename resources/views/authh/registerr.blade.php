@extends('layouts.appp')

@section('content')
    <div class="center jumbotron">
        <form action="{{action('authh\RegisterrController@store')}}" method="post">
            {{-- {{method_field('post')}} --}}
             @csrf 
            <h1 style="text-align:center;">Register</h1>
            @if (session()->has('error'))
                <div class="alert alert-danger">
                    {{ Session::get('error') }}
                </div>
            @endif
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
                <div class="form-group col-xs-6">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <span class="fa fa-user"></span>
                                </div>
                            </div>
                            <input type="text" name="username" id="username" placeholder="John Doe" class="form-control" value="{{old('username')}}">
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="email">Email</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <span class="fa fa-envelope"></span>
                                </div>
                            </div>
                            <input type="email" name="email" id="email" placeholder="JohnDoe@gmail.com" class="form-control" value="{{old('email')}}">
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="Password">Password</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <span class="fa fa-lock"></span>
                                </div>
                            </div>
                            <input type="password" name="password" id="password" placeholder="JoanDoe123@" class="form-control" title="longer than 7, contains numbers, lowercase, uppercase and special characters">
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="RetypePassword">Repeat Password</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <span class="fa fa-lock"></span>
                                </div>
                            </div>
                            <input type="password" name="retypepassword" id="RetypePassword" placeholder="Repeat Password" class="form-control">
                        </div>
                    </div>
                    <button class="btn btn-warning float-right" type="submit">Register</button>
                </div>
            </form>
        {{-- <register></register> --}}
    </div>
@endsection