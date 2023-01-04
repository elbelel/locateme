@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="clear-fix my-3">
                <h3 class="float-start">Users</h3>  
            <a href="/users/create">
                <button type="button" class="btn btn-danger mx-3 px-5 float-end">Create New User</button>
            </a>
            </div>

            <div>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Username</th>
                        <th scope="col">Fullname</th>
                        <th scope="col">Email</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($users as $user)
                      <tr>
                        <th scope="row"></th>
                        <th >{{$user->name}}</th>
                        <td>{{$user->first_name .' '.$user->last_name }}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->phone_number}}</td>
                        <td>Active</td>
                        <td>            <a href="/users/edit/{{$user->id}}">
                            <button type="button" class="btn btn-info btn-sm">Edit</button>
                        </a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
@endsection