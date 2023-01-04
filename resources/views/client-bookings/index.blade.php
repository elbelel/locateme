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
                   @foreach($bookings  as $booking)
                      <tr>
                        <th scope="row">1</th>
                        <th >{{$booking->booking->session_id}}</th>
                        <td>{{$booking->booking->duration}}</td>
                        <td>{{$booking->booking->facility->name}}</td>
                        <td>
                         {{$booking->timeslot->start_date_time .'-'. $booking->timeslot->end_date_time}}
                        </td>
                        <td>  {{ \Carbon\Carbon::parse($booking->date)->isoFormat('MMM Do YYYY')}}</td>
                        <td>N{{$booking->booking->price}}</td>
                        <td>            
                          {{$booking->user->phone_number}}
                        </td>
                        <td>
                          {{$booking->user->email}}
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