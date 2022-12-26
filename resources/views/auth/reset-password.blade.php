<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reset Password</title>
    <link href="../css/app.css"  rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col d-flex justify-content-center ">
            <div class="card login-card">
                <div class="card-body">
                    <div class="text-center">
                        <a href="/"><img src={{ asset('/images/Logo.png') }} width="100px" /></a>
                        <p class="my-4">Please enter your  details to reset your password</p>

                    </div>
                    <form>
                        <div class="form-group">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" type="email" name="email" :value="old('email', $request->email)" required autofocus>
                                <label for="floatingInput">Email </label>
                                <span :messages="$errors->get('email')" class="mt-2 text-danger"></span>
                              </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="form-floating">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                                <span :messages="$errors->get('password')" class="mt-2" ></span>
                              </div>
                         </div>

                         <div class="form-group mb-3">
                            <div class="form-floating">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Confirm Password</label>
                                <span :messages="$errors->get('confirm_password')" class="mt-2" ></span>
                              </div>
                         </div>
                        

                        
                        <div class="d-grid gap-2 mt-5">
                            <button type="submit" class="btn bg-orange btn-lg">Reset Password</button>
                           
                          </div>
                        <div class="text-center my-3">
                            
                            
                            <a href="/" class="text-black">Home
                            </a>
                        </div>
                        
                      </form>
                      
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>

{{-- <x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required />
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
            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
