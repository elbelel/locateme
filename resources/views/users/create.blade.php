@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col mt-3">
            <h3 class="my-5">Create New User</h3>
            <form>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Username">
                                <label for="floatingInput">Username </label>
                                <span :messages="$errors->get('username')" class="mt-2 text-danger"></span>
                              </div>
                        </div>
                        
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="First name">
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
                                <input type="text" class="form-control" id="floatingInput" placeholder="Last name">
                                <label for="floatingInput">Last Name </label>
                                <span :messages="$errors->get('lname')" class="mt-2 text-danger"></span>
                              </div>
                        </div>
                        
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Email">
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
                                <input type="text" class="form-control" id="floatingInput" placeholder="Mobile">
                                <label for="floatingInput">Mobile </label>
                                <span :messages="$errors->get('mobile')" class="mt-2 text-danger"></span>
                              </div>
                        </div>
                        
                    </div>
                    <div class="col">
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
                    </div>
                </div>
                
                

                
                <div class=" mt-5 text-center">
                    <button type="submit" class="btn bg-orange px-5 py-2 m-3">Cancel</button>
                    <a href="/users" ><button type="submit" class="btn btn-success px-5 py-2">Create User</button></a>

                  </div>
                
                
              </form>
        </div>
    </div>
</div>
@endsection