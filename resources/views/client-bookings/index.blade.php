@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="clear-fix my-3">
                <h3 class="float-start"> All Clients Bookings</h3>  
            <a href="/booking/create">
            </a>
            </div>

            <div>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Booking ID</th>
                        <th scope="col">Duration</th>
                        <th scope="col">Facility</th>
                        <th scope="col">Time Slot</th>
                        <th scope="col">Date</th>
                        <th scope="col">Price</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    {{-- @foreach($bookings  as $booking)
                      <tr>
                        <th scope="row">1</th>
                        <th >{{$booking->session_id}}</th>
                        <td>{{$booking->duration}}</td>
                        <td>{{$booking->facility->name}}</td>
                        <!-- <td>{{$booking->season_id}}</td> -->
                        <td>
                          <img src="{{ url('public/Image/'.$booking->image) }}"
                    style="height: 100px; width: 150px;">
                        </td>
                        <td>  {{ \Carbon\Carbon::parse($booking->created_at)->isoFormat('MMM Do YYYY')}}</td>
                        <td>N{{$booking->price}}</td>
                        <td>            <a href="/booking/edit/{{$booking->id}}">
                            <button type="button" class="btn btn-info btn-sm">Edit</button>
                        </a>
                        </td>
                      </tr>
                      @endforeach --}}
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
@endsection