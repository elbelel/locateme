@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="clear-fix my-3">
                <h3 class="float-start">All Bookings</h3>  
            
            </div>

            <div>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Booking Details</th>
                        <th scope="col">Facility</th>
                        <th scope="col">Booking ID</th>
                        <th scope="col">Time Slot</th>
                        <th scope="col">Date</th>
                        <th scope="col">Price</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <th > <img src={{ asset('/images/icons/user.png') }} width="30" />  FAD - 00212</th>
                        <td>Football</td>
                        <td>110229966</td>
                        <td>11:00 am - 12:00 pm</td>
                        <td>18 December</td>
                        <td>N20,000</td>
                        <td class="text-success">Done</td>
                        <td>            <a href="/booking/edit">
                            <button type="button" class="btn btn-info btn-sm">Edit</button>
                        </a>
                        </td>
                      </tr>
                      
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
@endsection