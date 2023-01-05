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
          <div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <div class="images p-3">
                            <div class="text-center p-4"> <img id="main-image" src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/belt.webp" width="400" /> </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product p-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center"> <i class="fa fa-long-arrow-left"></i> <span class="ml-1">Back</span> </div> <i class="fa fa-shopping-cart text-muted"></i>
                            </div>
                            <div class="mt-4 mb-3"> <span class="text-uppercase text-muted brand">Orianz</span>
                                <h5 class="text-uppercase">Men's slim fit t-shirt</h5>
                                <div class="price d-flex flex-row align-items-center"> <span class="act-price">$20</span>
                                    <div class="ml-2"> <small class="dis-price">$59</small> <span>40% OFF</span> </div>
                                </div>
                            </div>
                            <p class="about">Shop from a wide range of t-shirt from orianz. Pefect for your everyday use, you could pair it with a stylish pair of jeans or trousers complete the look.</p>
                            <div class="sizes mt-5">
                                <h6 class="text-uppercase">Size</h6> <label class="radio"> <input type="radio" name="size" value="S" checked> <span>S</span> </label> <label class="radio"> <input type="radio" name="size" value="M"> <span>M</span> </label> <label class="radio"> <input type="radio" name="size" value="L"> <span>L</span> </label> <label class="radio"> <input type="radio" name="size" value="XL"> <span>XL</span> </label> <label class="radio"> <input type="radio" name="size" value="XXL"> <span>XXL</span> </label>
                            </div>
                            <div class="cart mt-4 align-items-center"> <button class="btn btn-danger text-uppercase mr-2 px-4">Add to cart</button> <i class="fa fa-heart text-muted"></i> <i class="fa fa-share-alt text-muted"></i> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

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
