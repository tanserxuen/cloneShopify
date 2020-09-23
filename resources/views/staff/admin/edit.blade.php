@extends('layouts.staff')

@section('staff_content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <form action="{{ route('admins.update', $user->id) }}" method="POST">
                        @csrf
                        {{ method_field('PUT')}}

                        <div class="form-group"> 
                            <label for="nameid">Name</label>
                            <input type="text" placeholder="Enter Name" id="nameid" class="form-control" name="name" value="{{$user->name}}">
                        </div>
                        <div class="form-group"> 
                            <label for="emailid">Email</label>
                            <input type="text" placeholder="Enter Email" id="emailid" class="form-control" name="email" value="{{$user->email}}">
                        </div>
                        <div class="form-check"> 
                            <label for="roleid">Roles</label><br>
                            @foreach ($roles as $role)
                                <input type="checkbox" id="tagid" value="{{$role->id}}" name="roles[]" 
                                    @if($user->roles->pluck('id')->contains($role->id)) checked @endif>
                                <label>{{$role->name}}</label><br>
                            @endforeach
                        </div>
                        <button class="btn btn-info" type="submit">Submit</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
