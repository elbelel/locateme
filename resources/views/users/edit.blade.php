@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col mt-3">
            <h3 class="my-5">Edit User</h3>
            <form method="POST" action="{{ route('userupdate') }}">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="name" value="{{$user->name}}">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="id" value="{{$user->id}}" hidden>
                                <label for="floatingInput">Username </label>
                                <span :messages="$errors->get('username')" class="mt-2 text-danger"></span>
                              </div>
                        </div>
                        
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="First name" name="first_name" value="{{$user->first_name}}">
                                <label for="floatingInput">First Name </label>
                                <span :messages="$errors->get('fname')" class="mt-2 text-danger"></span>
                              </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Last name" name="last_name" value="{{$user->last_name}}">
                                <label for="floatingInput">Last Name </label>
                                <span :messages="$errors->get('lname')" class="mt-2 text-danger"></span>
                              </div>
                        </div>
                        
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Email" name="email" value="{{$user->email}}">
                                <label for="floatingInput">Email </label>
                                <span :messages="$errors->get('email')" class="mt-2 text-danger"></span>
                              </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Mobile" name="phone_number" value="{{$user->phone_number}}">
                                <label for="floatingInput">Mobile </label>
                                <span :messages="$errors->get('mobile')" class="mt-2 text-danger"></span>
                              </div>
                        </div>
                        
                    </div>
                    <!-- <div class="col">
                        <div class="form-group">
                            <div class="form-floating mb-3">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Please select role</option>
                                    <option value="all">All Permissions</option>
                                    <option value="basic">Basic Permissions</option>
                                  </select>                                
                                <span :messages="$errors->get('lname')" class="mt-2 text-danger"></span>
                              </div>
                        </div>
                    </div> -->
                    <div class="col">
                        <div class="form-group">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="role" name="role" value="{{$user->role == '1'? 'Admin' :'User'}}" disabled>
                                <label for="floatingInput">Role </label>
                                <span :messages="$errors->get('mobile')" class="mt-2 text-danger"></span>
                              </div>
                        </div>
                        
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <button type="submit" class="btn bg-secondary text-white px-5 py-2 m-3">Send Ivite</button>

                        </div>
                        
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <button type="submit" class="btn bg-secondary px-5 py-2 m-3 text-white">Reset Password</button>

                        </div>
                    </div>
                </div>
                
                

                
                <div class=" mt-5 text-center">
                    <a href="/users" class="btn bg-orange px-5 py-2 m-3">Cancel</a>
                    <button type="submit" class="btn btn-success px-5 py-2">Update User</button>

                  </div>
                
                
              </form>
        </div>
    </div>
</div>
@endsection