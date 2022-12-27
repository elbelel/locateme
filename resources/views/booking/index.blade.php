@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="clear-fix my-3">
                <h3 class="float-start"> Bookings</h3>  
            <a href="/booking/create">
                <button type="button" class="btn btn-danger mx-3 px-5 float-end">Create Booking</button>
            </a>
            </div>

            <div>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Season ID</th>
                        <th scope="col">Duration</th>
                        <th scope="col">Facility</th>
                        <!-- <th scope="col">Booking ID</th> -->
                        <th scope="col">Date</th>
                        <th scope="col">Price</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($bookings  as $booking)
                      <tr>
                        <th scope="row">1</th>
                        <th >{{$booking->session_id}}</th>
                        <td>{{$booking->duration}}</td>
                        <td>{{$booking->facilities_id}}</td>
                        <!-- <td>{{$booking->season_id}}</td> -->
                        <td>{{$booking->created_at}}</td>
                        <td>N{{$booking->price}}</td>
                        <td>            <a href="/booking/edit/{{$booking->id}}">
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