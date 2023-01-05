<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome</title>
        <link rel="shortcut icon" href="{{asset('images/favi.ico')}}">

        <!-- Fonts -->
        <link href="../css/app.css" {{ asset('/css/app.css') }}  rel="stylesheet"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <!-- Styles -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


       
    </head>
    <body >
       <div class="">
        <nav class="navbar navbar-expand-lg  bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="/"> <img src={{ asset('/images/Logo.svg') }} width="200px" height="80px" />  </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">              
                </ul>
                <div class="d-flex" >
                    @if(Auth::check())
                    <a href="/dashboard">  <button type="button" class="btn btn-danger mx-4 px-5">Dashbaord</button></a>

                    @else
                    <a href="/login">  <button type="button" class="btn btn-danger mx-4 px-5">Log in</button></a>
                    @endif
                </div>
              </div>
            </div>
          </nav>

          <div class="hero-section">
            <!-- <div class="hero-text">

                <h1>I am John Doe</h1>
                <p>And I'm a Photographer</p>
                <button>Hire me</button>
            </div> -->
            <div class="row">
            <div class="col-md-7">
                <div class="header-content">
                <span class="h-t1">Everything your city has to offer</span>
                <span class="h-t2">delivered in minutes!</span>
                <div class="h-form">
                    <div class="row">
                        <div class="col-md-8">
                            <input type="text" class="h-input my-5 px-5" placeholder="Type and Select address from list"/>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-danger my-5 px-5">Near</button>
                        </div>
                    </div>
                </div>
                </div>
           
            </div>
            <div class="col-md-5">
            <img class="fly-man" src={{ asset('/images/flymen-divoora.png') }}  />
            <img class="cloud" src={{ asset('/images/nuvola-1-2.png') }}  />
            </div>
            </div>
            <div class="seconds-section">
            
            </div>
  
          </div>
          
       </div>
       
       <section>
        <div class="mt-5">
            <h4 class="h-t1"> Shops: </h4>
            <span class="b-text">Discover the services available around you</span>
        </div>
        <div class="container">
            <div class="row">
            @foreach($shops as $shop)
                <div class="card m-5" style="width: 18rem;">
                    <img src={{ url('public/Image/'.$shop->image) }} class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-text">{{$shop->name}}</h5>
                        </div>
                </div>
            @endforeach
            <!-- <div class="card m-5" style="width: 18rem;">
                <img src={{ url('images/flymen-divoora.png') }} class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-text">Jumia</h5>
                </div> -->
            </div>
            </div>
        </div>
       </section>

       <section>
        <div class="my-5">
        <h4 class="h-t1"> Products: </h4>
            <span class="b-text">Discover some of the cool products close to you</span>

            <div class="container">
                <div class="row my-5">
                    <div class="card" style="width: 18rem;">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/belt.webp" class="card-img-top" alt="...">        
                        <div class="card-body">
                            <a href="" class="text-reset">
                            <h5 class="card-title mb-3">Product name</h5>
                            </a>
                            <a href="" class="text-reset">
                            <p>Category</p>
                            </a>
                            <h6 class="mb-3">$61.99</h6>
                        </div>
                    </div>
                </div>
            </div>
                
        </div>
       </section>
       <section>
       <div class="my-5">
        <h4 class="h-t1"> Our Partners: </h4>
            <span class="b-text">Some of the partners who have chosen divoora as a delivery service!
</span>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src={{ asset('/images/redbull.png') }} class="img-fluid" />
                </div>
                <div class="col-md-2">
                    <img src={{ asset('/images/mcdonalds.png') }} class="img-fluid" />

                </div>
                <div class="col-md-2">
                    <img src={{ asset('/images/burger-king.png') }} class="img-fluid" />

                </div>
                <div class="col-md-3">
                    <img src={{ asset('/images/kfc.png') }} class="img-fluid" />

                </div>
                <div class="col-md-2">
                    <img src={{ asset('/images/spar.png') }} class="img-fluid" />

                </div>
                
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
<script type="text/javascript">
    const shop = @json($shops);

     $(document).ready(function () {
        const new_long = 9.0958622
        const new_lat = 7.4952049
    for(let i = 0; i<shop.length;i++){
    const new_longitude=  9.0958622;
	const new_latitude= 7.4952049;
	const old_longitude=shop[i].long
	const old_latitude= shop[i].lat
   	const dLat = toRad(new_latitude-old_latitude);
    const dLon = toRad(new_longitude-old_longitude);
	let radius = 6371;
        const a = Math.sin(dLat/2) * Math.sin(dLat/2) +
        Math.cos(toRad(old_latitude)) * Math.cos(toRad(new_latitude)) *
              Math.sin(dLon/2) * Math.sin(dLon/2);
        let c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));
       let d = radius * c; // Distance in km

       console.log(d)
    }

    function toRad($Value) 
{
    return $Value * Math.PI / 180;
}

//         if (navigator.geolocation) {
//     navigator.geolocation.getCurrentPosition(showPosition);
//         } 

//         function showPosition(position) {
//             console.log(position)
// }
     })
</script>
    </body>
</html>
