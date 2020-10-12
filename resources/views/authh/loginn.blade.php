@extends('layouts.appp')

@section('content')
    <div class="center jumbotron">
        {{-- <loginn></loginn> --}}
        <form action="{{action('authh\LoginnController@checkAuth')}}" method="post">
            {{method_field('get')}}
            @csrf

            <h1 style="text-align:center;">Login</h1>
            @if (session()->has('error'))
                <div class="alert alert-danger">
                    {{ Session::get('error') }}
                </div>
            @endif
            @if (session()->has('reset'))
                <div class="alert alert-success">
                    {{ Session::get('reset') }}
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
                        <input type="text" name="username" id="username" placeholder="John Doe" class="form-control">
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
                        <input type="password" name="password" id="password" placeholder="JoanDoe123@" class="form-control">
                    </div>
                </div>
                <button class="btn btn-warning float-right" type="submit">Login</button>
            </div>
        </form>

        <form action="/fgtpwd" method="get" >
            @csrf
            <button class="btn btn-default" type="submit" style="text-decoration: underline;">Forget Password</button>
        </form>
    </div>
@endsection