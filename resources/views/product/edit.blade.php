@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col mt-3">
            <h3 class="my-5">Edit  Product</h3>
            <form method="POST" action="{{ route('productupdate') }}">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Product Name" name="name" value="{{$product->name}}">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="id" value="{{$product->id}}" hidden>

                                <label for="floatingInput">Product Name </label>
                                @error('name')
                                    <span class="mt-2  text-danger" >{{$errors->first('name')}}</span>
                                    @enderror             
                                </div>
                        </div>
                        
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <div class="form-floating mb-3">
                            <select class="form-select" aria-label="Default select example" name="facility">
                                <option selected>Please select shop</option>
                                @foreach($shops as $shop)
                                <option value="{{ $shop->id }}" {{$product->shops_id == $shop->id ? 'selected':''}}>{{ $shop->name }}</option> 
                                @endForeach
                                  </select>                                
                                  @error('shop')
                                    <span class="mt-2  text-danger" >{{$errors->first('shop')}}</span>
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
                                <input type="text" class="form-control" id="floatingInput" placeholder="Price" name="price" value="{{$product->price}}">
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
                                <input type="text" class="form-control" id="floatingInput" placeholder="Description" name="description" value="{{$product->description}}">
                                <label for="floatingInput">Description </label>
                                @error('description')
                                    <span class="mt-2  text-danger" >{{$errors->first('description')}}</span>
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
                <div class="row">
                    
                    
                
                <div class="col">
                        <div class="form-group">
                            <div class="form-floating mb-3">
                                <input type="file" class="form-control" id="floatingInput" placeholder="Description" name="image" value="{{$product->image}}">
                                <label for="floatingInput">Image </label>
                                @error('image')
                                    <span class="mt-2  text-danger" >{{$errors->first('image')}}</span>
                                    @enderror                              </div>
                        </div>
                </div>
                <div class="col">
                        
                </div>
                </div>
                
                

                
                <div class=" mt-5 text-center">
                <a href="/product" class="btn bg-orange px-5 py-2 m-3" >Cancel</a>
                   <button type="submit" class="btn btn-success px-5 py-2">Update Product</button>

                  </div>
                
                
              </form>
        </div>
    </div>
</div>
@endsection