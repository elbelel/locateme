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
                      <tr>
                        <th scope="row">1</th>
                        <th >Chris</th>
                        <td>Chris Chukwuebuka</td>
                        <td>chrischukwuebuka@gmail.com</td>
                        <td>0958685556</td>
                        <td>Active</td>
                        <td>            <a href="/users/edit">
                            <button type="button" class="btn btn-info btn-sm">Edit</button>
                        </a>
                        </td>
                      </tr>
                      
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
@endsection