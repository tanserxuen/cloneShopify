@extends('layouts.staff')

@section('staff_content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card mt-5">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Roles</th>
                                <th>Created</th>
                                @can('manage-users')
                                    <th>Action</th>
                                @endcan
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        @foreach ($user->roles as $role)
                                            <li>{{$role->name}}</li>
                                        @endforeach
                                    </td>
                                    <td>{{$user->created_at}}</td>
                                    <td>
                                        @can('edit-users')
                                            <a href="{{ route('admins.edit', $user->id) }}" class="btn btn-info">Edit</a>
                                        @endcan
                                        @can('delete-users')
                                            <form action="{{ route('admins.destroy', $user->id) }}" method="POST" class="float-left">
                                                @csrf
                                                {{ method_field('DELETE') }}
                                                <button type="submit" class="btn btn-warning">Delete</button>
                                            </form>
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
