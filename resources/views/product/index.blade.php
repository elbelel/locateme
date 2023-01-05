@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="clear-fix my-3">
                <h3 class="float-start"> Products</h3>  
            <a href="/product/create">
                <button type="button" class="btn btn-danger mx-3 px-5 float-end">Create Product</button>
            </a>
            </div>

            <div>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Shop</th>
                        <th scope="col">Image</th>
                        <th scope="col">Price</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($products  as $product)
                      <tr>
                        <th scope="row">1</th>
                        <th >{{$product->name}}</th>
                        <td>{{$product->shop->name}}</td>
                        <td>
                          <img src="{{ url('public/Image/'.$product->image) }}"
                    style="height: 100px; width: 150px;">
                        </td>
                        <td>N{{$product->price}}</td>
                        <td>            <a href="/product/edit/{{$product->id}}">
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