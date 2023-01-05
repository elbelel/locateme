@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="clear-fix my-3">
                <h3 class="float-start"> Shops</h3>  
            <a href="/shop/create">
                <button type="button" class="btn btn-danger mx-3 px-5 float-end">Create Shop</button>
            </a>
            </div>

            <div>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Shop Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Image</th>
                        <th scope="col">latitude</th>
                        <th scope="col">Longitude</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($shops  as $shop)
                      <tr>
                        <th scope="row">1</th>
                        <th >{{$shop->name}}</th>
                        <td>{{$shop->category}}</td>
                        <td>
                          <img src="{{ url('public/Image/'.$shop->image) }}"
                    style="height: 100px; width: 150px;">
                        </td>
                        <td>{{$shop->lat}}</td>
                        <td>{{$shop->long}}</td>

                        <td>            <a href="/shop/edit/{{$shop->id}}">
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