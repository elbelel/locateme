@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col mt-3">
            <h3 class="my-5">Edit New Booking</h3>
            <form method="POST" action="{{ route('bookingupdate') }}">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="duration" value="{{$booking->duration}}" disabled>
                                <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="id" value="{{$booking->id}}" hidden>

                                <label for="floatingInput">Duration </label>
                                @error('duration')
                                    <span class="mt-2  text-danger" >{{$errors->first('duration')}}</span>
                                    @enderror             
                                </div>
                        </div>
                        
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <div class="form-floating mb-3">
                            <select class="form-select" aria-label="Default select example" name="facility">
                                <option selected>Please select facility</option>
                                @foreach($facilities as $facility)
                                <option value="{{ $facility->id }}" selected="{{$booking->facilities_id == $facility->id ? 'true':'false'}}">{{ $facility->name }}</option> 
                                @endForeach
                                  </select>                                
                                  @error('facility')
                                    <span class="mt-2  text-danger" >{{$errors->first('facility')}}</span>
                                    @enderror                             
                                 </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- <div class="col">
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
                    </div> -->
                    <div class="col">
                        <div class="form-group">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Price" name="price" value="{{$booking->price}}">
                                <label for="floatingInput">Price </label>
                                @error('price')
                                    <span class="mt-2  text-danger" >{{$errors->first('price')}}</span>
                                    @enderror                              </div>
                        </div>
                    </div>
                    <!-- <div class="col">
                        <div class="form-group">
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="floatingInput" placeholder="Description" name="year" value="{{$booking->year}}" >
                                <label for="floatingInput">Year </label>
                                <span :messages="$errors->get('description')" class="mt-2 text-danger"></span>
                              </div>
                        </div>
                </div> -->
                <div class="col">
                        <div class="form-group">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Description" name="description" value="{{$booking->description}}">
                                <label for="floatingInput">Description </label>
                                @error('description')
                                    <span class="mt-2  text-danger" >{{$errors->first('description')}}</span>
                                    @enderror                              
                                </div>                             
                             </div>
                        </div>
                        
                    </div>

                <div class="row">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Description" name="year" value="{{$booking->year}}" disabled>
                                <label for="floatingInput">Year </label>
                                @error('year')
                                    <span class="mt-2  text-danger" >{{$errors->first('year')}}</span>
                                    @enderror                              </div>
                        </div>
                </div>
                    
                
                <div class="col">
                        <div class="form-group">
                            <div class="form-floating mb-3">
                                <input type="file" class="form-control" id="floatingInput" placeholder="Description" name="image" value="{{$booking->image}}">
                                <label for="floatingInput">Image </label>
                                @error('image')
                                    <span class="mt-2  text-danger" >{{$errors->first('image')}}</span>
                                    @enderror                              </div>
                        </div>
                </div>
                </div>
                
                

                
                <div class=" mt-5 text-center">
                <a href="/booking" class="btn bg-orange px-5 py-2 m-3" >Cancel</a>
                   <button type="submit" class="btn btn-success px-5 py-2">Update Booking</button>

                  </div>
                
                
              </form>
        </div>
    </div>
</div>
@endsection