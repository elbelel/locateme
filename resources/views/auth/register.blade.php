<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="../css/app.css"  rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-body">
                        <div class="">
                            <a href="/"><img src={{ asset('/images/Logo.png') }} width="50px" /></a>
                            <p class="my-4 h4">Get started with your  <br/>account.</p>
    
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                        @csrf
                            <div class="form-group">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="first name" name="first_name">
                                    <label for="floatingInput">First Name </label>
                                    @error('first_name')
                                    <span class="mt-2  text-danger" >{{$errors->first('first_name')}}</span>
                                    @enderror                                  
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="last name" name="last_name">
                                    <label for="floatingInput">Last Name </label>
                                    @error('last_name')
                                    <span class="mt-2  text-danger" >{{$errors->first('last_name')}}</span>
                                    @enderror                                  
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="team name" name="team_name">
                                    <label for="floatingInput">Team Name </label>
                                    @error('team_name')
                                    <span class="mt-2  text-danger" >{{$errors->first('team_name')}}</span>
                                    @enderror                                  
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="phone" name="phone_number">
                                    <label for="floatingInput">Phone </label>
                                    @error('phone_number')
                                    <span class="mt-2  text-danger" >{{$errors->first('phone_number')}}</span>
                                    @enderror                                      
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                                    <label for="floatingInput">Email </label>
                                    @error('email')
                                    <span class="mt-2  text-danger" >{{$errors->first('email')}}</span>
                                    @enderror                                 
                                 </div>
                            </div>
                             <div class="form-group">
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                                    <label for="floatingPassword">Password</label>
                                    @error('password')
                                    <span class="mt-2  text-danger" >{{$errors->first('password')}}</span>
                                    @enderror
                                  </div>
                             </div>
                             <div class="form-group">
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="floatingPassword" placeholder="password_confirmation" name="password_confirmation">
                                    <label for="floatingPassword">Confirm Password</label>
                                    <span :messages="$errors->get('password_confirmation')" class="mt-2" ></span>
                                  </div>
                             </div>
                            <!-- <div class="mb-3 form-check mt-3">
                              <input type="checkbox" class="form-check-input" id="exampleCheck1">
                              <label class="form-check-label" for="exampleCheck1">By ticking, you agree to our terms and 
                                conditions</label>
                              
                            </div> -->
    
                            
                            <div class="d-grid gap-2 mt-5">
                                <button type="submit" class="btn bg-orange btn-lg">Login</button>
                               
                              </div>
                            <div class="text-center my-3">
                                <a href="/login" class="text-black">Have an account? <strong class="text-orange ">Sign In</strong>
                                </a>
                            </div>
                            
                          </form>
                          
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center "> 
            <div class="card border-0 register-card">
            <div class="card-body">
                <img src={{ asset('/images/Logo.png') }}  width="250px" />    
            </div>    
            </div>    
            </div>
        </div>
    </div>
</body>
</html>


{{-- <x-guest-layout>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
