<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome</title>
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
              <a class="navbar-brand" href="#"> <img src={{ asset('/images/Logo.png') }} width="100px" height="80px" />  </a>
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

          <div class="hero-section">
          </div>
       </div>
       <section>
        <div class="text-center my-5">
            <h4>  RECREATIONAL  <br/>
                SERVICES </h4>
                
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src={{ asset('/images/football.png') }} class="img-fluid" />
                </div>
                <div class="col-md-6">
                    <h4 class="my-5">FOOTBALL</h4>
                    <p>Football is the world’s most popular ball game in numbers of participants and spectators. Simple in its principal rules and essential equipment, the sport can be played almost anywhere, from official football playing fields (pitches) to gymnasiums, streets, school playgrounds, parks, or beaches.</p>
                    <button type="button" class="btn btn-danger my-5 px-5">COOMING SOON !</button>

                </div>
            </div>

            <div class="row my-5">
                <div class="col-md-6">
                    <h4 class="my-5">BASKETBALL</h4>
                    <p>basketball is competitively a winter sport, it is played on a 12-month basis—on summer playgrounds, in municipal, industrial, and church halls, in school yards and family driveways, and in summer camps—often on an informal basis between two or more contestants. Many grammar schools, youth groups.</p>
                    <button type="button" class="btn btn-danger my-5 px-5">COOMING SOON !</button>

                </div>
                <div class="col-md-6">
                    <img src={{ asset('/images/basketball.png') }} class="img-fluid" />
                    
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <img src={{ asset('/images/tenis.png') }} class="img-fluid" />
                </div>
                <div class="col-md-6">
                    <h4 class="my-5">TENNIS</h4>
                    <p>Tennis originally was known as lawn tennis, and formally still is in Britain, because it was played on grass courts by Victorian gentlemen and ladies. It is now played on a variety of surfaces. The origins of the game can be traced to a 12th–13th-century French handball game called jeu de paume</p>
                    <button type="button" class="btn btn-danger my-5 px-5">COOMING SOON !</button>

                </div>
            </div>
        </div>
       </section>

       <section>
        <div class="text-center my-5">
            <h4> STAY HEALTHY </h4>
            <h6>FarmToYou Recreational center</h6>

            <div class="container">
                <div class="row my-5">
                    <div class="col-md-6">
                        <h4 class="my-5">FARM TO YOU HEALTH BAR</h4>
                        <p>Fortified beverages and health bars, and all other dietetic foods adapted for medical use and Organic and allergy sensitive cakes, cookies and health bars                            .</p>
    
                    </div>
                    <div class="col-md-6">
                        <img src={{ asset('/images/health.png') }} class="img-fluid" />
                        
                    </div>
                </div>
            </div>
                
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
