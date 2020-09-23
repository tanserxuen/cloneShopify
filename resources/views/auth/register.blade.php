@extends('layouts.cust')

@section('style')
<style>
    .login{
        width:700px;
        height:auto;
        padding:100px;
        text-align: center;
        background: #eee
    }

    .loginA{
        background: #ccc;
        padding: 25px;
        margin-bottom: 25px;
        text-align: center;
    }

    .loginA input[type=email], input[type=password], input[type=text]{
        width: 70%;
        padding: 12px 20px;
        margin: 8px 15px;
        display:inline;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    .myimg{
        width:150px;
        height:150px;
        object-fit:cover;
        border-radius:50%;
    }
</style>
 
@endsection

@section('cust_content')
    <div class="container mt-5">
        <div class="login" style="margin-left:auto;margin-right:auto;">

        <h2>{{ __('Register') }}</h2>
        <br>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="loginA">
                <img src="/storage/image/register.png" alt="register" title="register" class="myimg mb-3">
                <div class="form-group">
                    <span class="input-group-addon"><i class="fa fa-user" style="font-size: 24px"></i></span>
                    <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter Name">

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <span class="input-group-addon"><i class="fa fa-envelope" style="font-size: 24px"></i></span>
                    <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <span class="input-group-addon"><i class="fa fa-lock" style="font-size: 24px"></i></span>
                    <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter Password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <span class="input-group-addon"><i class="fa fa-lock" style="font-size: 24px"></i></span>
                        <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Re-Type Password">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
        </form>

        </div>
    </div>
@endsection
