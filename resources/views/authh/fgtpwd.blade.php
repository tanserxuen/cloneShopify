@extends('layouts.appp')

@section('content')
    <div class="center jumbotron">
        <form action="{{action('authh\FgtpwdController@reset')}}" method="post">
            {{method_field('put')}}
             @csrf 
            <h1 style="text-align:center;">Forgot Password</h1>
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
                        <label for="oldpassword">Old Password</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <span class="fa fa-lock"></span>
                                </div>
                            </div>
                            <input type="password" name="oldpassword" id="oldpassword" placeholder="Enter Old Password" class="form-control">
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="newpassword">New Password</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <span class="fa fa-lock"></span>
                                </div>
                            </div>
                            <input type="password" name="newpassword" id="newpassword" placeholder="Enter New Password" class="form-control">
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="RetypePassword">Repeat New Password</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <span class="fa fa-lock"></span>
                                </div>
                            </div>
                            <input type="password" name="retypepassword" id="RetypePassword" placeholder="Repeat Password" class="form-control">
                        </div>
                    </div>
                    <button class="btn btn-warning float-right" type="submit">Confirm</button>
                </div>
            </form>
        {{-- <register></register> --}}
    </div>
@endsection