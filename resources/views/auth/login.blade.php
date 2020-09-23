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

    .loginA input[type=email], input[type=password] {
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
        border:#fff 12px solid;
        box-shadow: 10px 10px 5px 0px rgba(138,130,138,1);
    }
</style>
 
@endsection

@section('cust_content')
    <div class="container mt-5">
        <div class="login" style="margin-left:auto;margin-right:auto;">
            
            <h2>{{ __('Login') }}</h2>
            <br>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="loginA">
                <img src="/storage/image/bite.gif" alt="avatar" title="avatar" class="myimg mb-3">
                    <div class="form-group">
                        <span class="input-group-addon"><i class="fa fa-user" style="font-size: 24px"></i></span>
                        <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus  placeholder="Enter Email" style="display:inline;">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form group">
                        <span class="input-group-addon"><i class="fa fa-lock" style="font-size: 24px"></i></span>
                        <input id="password" type="password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter Password" style="display:inline;">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                

                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
            
                </div>
            </form>
        </div>
    </div>
@endsection
