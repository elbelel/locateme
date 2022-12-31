<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome | Book</title>
        <link rel="shortcut icon" href="{{asset('images/favi.png')}}">

        <!-- Fonts -->
        <link href="../css/app.css" {{ asset('/css/app.css') }}  rel="stylesheet"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <!-- Styles -->       
    </head>
    <body >
       <div class="">
        <nav class="navbar navbar-expand-lg  bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="/"> <img src={{ asset('/images/Logo.png') }} width="100px" height="80px" />  </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">              
                </ul>
                <div class="d-flex" >
                    <button type="button" class="btn btn-danger mx-3 px-5">Bookings</button>
                    <a href="/login">  <button type="button" class="btn btn-outline-danger mx-4 px-5">Log in</button></a>

                </div>
              </div>
            </div>
          </nav>

          <div class="container-fluid book-welcome-sec">
            <img src={{ asset('/images/football.png') }} class="img-fluid" />

          </div>
       </div>
       <section>
        <div class="row container my-5">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="text-center m-5">
                    <h3 class="text-orange">Schedule Your Booking </h3>
                    <p>Check out the slots available </p>
                </div>

                <div class="card border-0 shadow">
                    <div class="card-body p-5">
                        <p> <strong>Mon - 08 : 00am - 01 : 00pm</strong> </p>
                        <p> <strong>Tue - 08 : 00am - 01 : 00pm</strong> </p>
                        <p> <strong>Wed - 08 : 00am - 01 : 00pm</strong> </p>
                        <p> <strong>Thu - 08 : 00am - 01 : 00pm</strong> </p>
                        <p> <strong>Fri - 08 : 00am - 01 : 00pm</strong> </p>
                        <p> <strong>Sat - 08 : 00am - 01 : 00pm</strong> </p>

                        <h4 class="mt-5">Schedule Your Booking</h4>

                        <div class="text-center">
                            <a href="/book-date">  
                                <button type="button" class="btn bg-orange mx-3 px-5 mt-5">Book Now</button>
                            </a>
                            
                        </div>

                    </div>
                </div>

            </div>
            <div class="col-4"></div>

        </div>
       </section>
       <section>
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <img src={{ asset('/images/price-pic.jpeg') }} width="100%" class="img-fluid" />
                </div>
                <div class="col-md-4">
                    <img src={{ asset('/images/farm2you.png') }} class="img-fluid" />

                </div>
            </div>
        </div>
       </section>

       <footer class="bg-dark text-white p-5 mt-5 text-center">
        <div><span>Dashboard</span> |
            <span>Solution</span> |
            <span>Event booking</span> |
            <span>Help Center</span> |
            <span>Blog</span> |
            <span>careers</span> |
            <span>About Us</span>
        
        </div>
           <div>
            <span>For football association</span> |
            <span>For schools</span> |
            <span>For councils</span> |
            <span>For clubs</span> |
            <span>For universities</span> |
            <span>For Leisure Centres</span> |
            <span>For Indoor Facilities</span> |
           </div>

           <div class="my-5"> <span> <img src={{ asset('/images/facebook.png') }} />
           </span> 
           <span> <img src={{ asset('/images/twitter.png') }} />
           </span>
           <span> <img src={{ asset('/images/instagram.png') }} />
           </span>
           <span> <img src={{ asset('/images/linkedin.png') }} />
           </span> </div>

           <p>
            FarmToYou Recreational Center © 2022. 
           </p>
           <p> All Rights Reserved.</p>
           <p>Terms and Conditions</p>
           <p>Privacy Policy</p>
       </footer>

       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    </body>
</html>
