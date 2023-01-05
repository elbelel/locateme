@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col mt-3">
            <h3 class="my-5">Edit  Shop</h3>
            <form method="POST" action="{{ route('shopupdate') }}">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Shop Name" name="name" value="{{$shop->name}}">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="id" value="{{$shop->id}}" hidden>

                                <label for="floatingInput">Shop Name </label>
                                @error('name')
                                    <span class="mt-2  text-danger" >{{$errors->first('name')}}</span>
                                    @enderror             
                                </div>
                        </div>
                        
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <div class="form-floating mb-3">
                            <select class="form-select" aria-label="Default select example" name="category">
                                <option selected>Please select Category</option>
                                    <option value="Restaurant" {{$shop->category == "Restaurant" ? 'selected':''}}>Restaurant</option>
                                    <option value="Grocery" {{$shop->category == "Grocery" ? 'selected':''}}>Grocery</option>
                                    <option value="Pharmacy" {{$shop->category == "Pharmacy" ? 'selected':''}}>Pharmacy</option>
                                  </select>                                
                                  @error('shop')
                                    <span class="mt-2  text-danger" >{{$errors->first('shop')}}</span>
                                    @enderror                             
                                 </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="latitude" name="lat" value="{{$shop->lat}}">
                                <label for="floatingInput">Latitude </label>
                                @error('lat')
                                    <span class="mt-2  text-danger" >{{$errors->first('lat')}}</span>
                                    @enderror                              </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Longitude" name="long" value="{{$shop->long}}">
                                <label for="floatingInput">Longitude </label>
                                @error('long')
                                    <span class="mt-2  text-danger" >{{$errors->first('long')}}</span>
                                    @enderror                              </div>
                        </div>
                    </div>
                
                        
                    </div>

                <div class="row">
                    

                
                <div class="col">
                        <div class="form-group">
                            <div class="form-floating mb-3">
                                <input type="file" class="form-control" id="floatingInput" placeholder="Description" name="image" value="{{$shop->image}}">
                                <label for="floatingInput">Image </label>
                                @error('image')
                                    <span class="mt-2  text-danger" >{{$errors->first('image')}}</span>
                                    @enderror                              </div>
                        </div>
                </div>
                <div class="col">
                        <div class="form-group">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Description" name="description" value="{{$shop->description}}">
                                <label for="floatingInput">Description </label>
                                @error('description')
                                    <span class="mt-2  text-danger" >{{$errors->first('description')}}</span>
                                    @enderror                              
                                </div>                             
                             </div>
                        </div>
                </div>
                
                

                
                <div class=" mt-5 text-center">
                <a href="/booking" class="btn bg-orange px-5 py-2 m-3" >Cancel</a>
                   <button type="submit" class="btn btn-success px-5 py-2">Update Shop</button>

                  </div>
                
                
              </form>
        </div>
    </div>
</div>
@endsection