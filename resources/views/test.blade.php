@extends('layouts.appp')

@section('content')
<div class="container">
    <div class="float-right m-3">
        {{-- <form action="/logoutt" method="post">
            @csrf
            {{-- {{method_field('delete')}} --}}
            {{-- <button class="btn btn-light" type="submit">Logout</button>
        </form> --}} 
    </div>
    <div class="jumbotron">
        @if ( session()->has('success') )
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif
        <div class="row">
            <div class="col-ms-3 p-5 ml-5" style="border:solid 4px #555;font-weight:900; background-color:#555;color:#fff">
                <div>DASHBOARD</div>
            </div>
            <div class="col-ms-9 m-5">
                @if ( session()->has('logged_in') )
                    <h2>Hi {{Session::get('logged_in')->username}}!</h2>
                    <small>{{Session::get('logged_in')->email}}</small>
                    <small>{{Session::get('logged_in')->created_at}}</small>
                @endif
            </div>
        </div>
        
        
    </div>
</div>
@endsection
