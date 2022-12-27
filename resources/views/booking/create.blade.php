@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col mt-3">
            <h3 class="my-5">Create New Booking</h3>
            <form>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Username">
                                <label for="floatingInput">Duration </label>
                                <span :messages="$errors->get('username')" class="mt-2 text-danger"></span>
                              </div>
                        </div>
                        
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <div class="form-floating mb-3">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Please select facility</option>
                                    <option value="1">Footbal</option>
                                    <option value="2">Basketball</option>
                                    <option value="3">Tennis</option>
                                    <option value="4">Health bar</option>
                                  </select>                                
                                <span :messages="$errors->get('lname')" class="mt-2 text-danger"></span>
                              </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <div class="form-floating mb-3">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Please select time slot</option>
                                    <option value="1">8am - 9am</option>
                                    <option value="2">9am - 10am</option>
                                    <option value="3">11am - 12am</option>
                                    <option value="4"> 1pm - 2pm </option>
                                    <option value="5"> 3pm - 4pm </option>
                                    <option value="6"> 5pm - 6pm </option>
                                  </select>                                
                                <span :messages="$errors->get('lname')" class="mt-2 text-danger"></span>
                              </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Price">
                                <label for="floatingInput">Price </label>
                                <span :messages="$errors->get('price')" class="mt-2 text-danger"></span>
                              </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Description">
                                <label for="floatingInput">Description </label>
                                <span :messages="$errors->get('description')" class="mt-2 text-danger"></span>
                              </div>
                        </div>
                        
                    </div>
                    <div class="col">
                        {{-- <div class="form-group">
                            <div class="form-floating mb-3">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Please select role</option>
                                    <option value="all">All Permissions</option>
                                    <option value="basic">Basic Permissions</option>
                                  </select>                                
                                <span :messmages="$errors->get('lname')" class="mt-2 text-danger"></span>
                              </div>
                        </div> --}}
                    </div>
                </div>
                
                

                
                <div class=" mt-5 text-center">
                    <button type="submit" class="btn bg-orange px-5 py-2 m-3">Cancel</button>
                    <a href="/booking" ><button type="submit" class="btn btn-success px-5 py-2">Create Booking</button></a>

                  </div>
                
                
              </form>
        </div>
    </div>
</div>
@endsection