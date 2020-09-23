@extends('layouts.cust')

@section('cust_content')
    <checkout :userid={{$user->id}}></checkout>
@endsection
        