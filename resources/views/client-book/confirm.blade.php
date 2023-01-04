<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('images/favi.png')}}">
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.0.2/index.global.min.js">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <title>Confirm booking details</title>
    <link href="../css/app.css" {{ asset('/css/app.css') }}  rel="stylesheet"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-center ">
                <div class="card login-card">
                    <div class="card-body">
                        <div class="text-center">
                            <a href="/"><img src={{ asset('/images/Logo.png') }} width="70px" /></a>
                            <div class="mb-5 mt-4">
                                <p class="float-start">Booking Details</p>
                            <a href="/book-date" class="float-end">Edit</a>
                            </div>
    
                        </div>
                        @if ($message = Session::get('status'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>	
                                <strong>{{ $message }}</strong>
                        </div>
                        @endif
                        <form method="POST" action="{{ route('bookingsconfirm') }}">
                        @csrf
                        <div class="form-group">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="bookingID" name="bookingId"  value="{{$details->booking->session_id}}" disabled>
                                <label for="floatingInput">Booking ID </label>
                                @error('bookingId')
                                    <span class="mt-2  text-danger" >{{$errors->first('bookingId')}}</span>
                                    @enderror                            
                                </div>
                        </div>
                        <div class="form-group">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="facility" name="facility" value="{{$details->booking->facility->name}}" disabled>
                                <label for="floatingInput">Facility </label>
                                @error('facility')
                                    <span class="mt-2  text-danger" >{{$errors->first('facility')}}</span>
                                    @enderror                            
                                </div>
                        </div>
                        <div class="form-group">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="time slot" name="time"value="{{$details->timeslot->start_date_time .'-'. $details->timeslot->end_date_time}}" disabled>
                                <label for="floatingInput">Time Slot </label>
                                @error('time')
                                    <span class="mt-2  text-danger" >{{$errors->first('time')}}</span>
                                    @enderror                            
                                </div>
                        </div>
                            <div class="form-group">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingInput" placeholder="phone number" name="phone" value="{{$details->user->phone_number}}" disabled>
                                    <label for="floatingInput">Phone </label>
                                    @error('phone')
                                        <span class="mt-2  text-danger" >{{$errors->first('phone')}}</span>
                                        @enderror                            
                                    </div>
                            </div>
                            <div class="form-group">
                                <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="id" value="{{$details->id}}" hidden>

                                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" value="{{$details->user->email}}" disabled>
                                    <label for="floatingInput">Email </label>
                                    @error('email')
                                        <span class="mt-2  text-danger" >{{$errors->first('email')}}</span>
                                        @enderror                            
                                    </div>
                            </div>
                             
                            <div class="mb-3 form-check mt-3">
                              <input type="checkbox" class="form-check-input" id="exampleCheck1">
                              <label class="form-check-label" for="exampleCheck1">By ticking, you agree to our terms and 
                                conditions</label>
                              
                            </div>
    
                            
                            <!-- <a href="/book-payment-typ" class="d-grid gap-2 mt-5"> -->


                                <button type="submit" class="btn bg-orange btn-lg d-grid gap-2 mt-5">Proceed</button>
                               
                              <!-- </a> -->
                            
                            
                          </form>
                          
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>