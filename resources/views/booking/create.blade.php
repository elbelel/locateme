@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col mt-3">
            <h3 class="my-5">Create New Booking</h3>
            <form method="POST" action="{{ route('bookingstore') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="duration" value="1hour" disabled>
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
                                <option value="{{ $facility->id }}">{{ $facility->name }}</option> 
                                @endForeach

                                    <!-- <option selected>Please select facility</option>
                                    <option value="1">Footbal</option>
                                    <option value="2">Basketball</option>
                                    <option value="3">Tennis</option>
                                    <option value="4">Health bar</option> -->
                                  </select>                                
                                  @error('facility')
                                    <span class="mt-2  text-danger" >{{$errors->first('facility')}}</span>
                                    @enderror
                                </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                   
                    <div class="col">
                        <div class="form-group">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Price" name="price">
                                <label for="floatingInput">Price </label>
                                @error('price')
                                    <span class="mt-2  text-danger" >{{$errors->first('price')}}</span>
                                    @enderror                             
                                 </div>
                        </div>
                    </div>
        
                <div class="col">
                        <div class="form-group">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Description" name="description">
                                <label for="floatingInput">Description </label>
                                @error('description')
                                    <span class="mt-2  text-danger" >{{$errors->first('description')}}</span>
                                    @enderror                              
                                </div>                             
                             </div>
                        </div>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Description" name="year" value="{{date('Y')}}" disabled>
                                <label for="floatingInput">Year </label>
                                @error('year')
                                    <span class="mt-2  text-danger" >{{$errors->first('year')}}</span>
                                    @enderror                              </div>
                        </div>
                </div>
                <div class="col">
                        <div class="form-group">
                            <div class="form-floating mb-3">
                                <input type="file" class="form-control" id="floatingInput" placeholder="Description" name="image" >
                                <label for="floatingInput">Image </label>
                                @error('image')
                                    <span class="mt-2  text-danger" >{{$errors->first('image')}}</span>
                                    @enderror                              </div>
                        </div>
                </div>
                    
                </div>
                
                

                
                <div class=" mt-5 text-center">
                <a href="/booking" class="btn bg-orange px-5 py-2 m-3" >Cancel</a>
                   <button type="submit" class="btn btn-success px-5 py-2">Create Booking</button>

                  </div>
                
                
              </form>
        </div>
    </div>
</div>
@endsection