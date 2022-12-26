<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
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
                        <p class="my-4">Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>

                    </div>
                    <form>
                        <div class="form-group">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Email </label>
                                <span :messages="$errors->get('email')" class="mt-2 text-danger"></span>
                              </div>
                        </div>
                        
                        

                        
                        <div class="d-grid gap-2 mt-5">
                            <button type="submit" class="btn bg-orange btn-lg">Email Password Reset Link</button>
                           
                          </div>
                        <div class="text-center my-3">
                            <a href="/" class="text-black"> <strong class="text-orange ">Home</strong>
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
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
