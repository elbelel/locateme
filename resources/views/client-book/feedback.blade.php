<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book confirm</title>
    <link rel="shortcut icon" href="{{asset('images/favi.png')}}">

    <link href="../css/app.css" {{ asset('/css/app.css') }}  rel="stylesheet"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    <div class="container p-5">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <img src={{ asset('/images/qrCode.png') }} width="100px" />
                        </div>

                        <div class="text-center">
                            <p class="my-4">Booking Confirmed</p>
                            <p>You’ve successfully booked our football Pitch
                                Your time is scheduled as:</p>
                                <h4 class="">December 6, 2022</h4>
                                <h4>10:00 AM - 11:00 AM</h4>
                        </div>

                        <div class=" mt-5 text-center">
                            <a href="/" class="btn bg-white px-5 py-2 m-3" >Back to home</a>
                               <a href="/">
                                <button  class="btn bg-orange px-5 py-2">Add booking</button>
                               </a>
            
                              </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>
</html>