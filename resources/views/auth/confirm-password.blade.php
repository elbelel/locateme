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
                        <p class="my-4">This is a secure area of the application. Please confirm your password before continuing.</p>

                    </div>
                    <form>
                        <div class="form-group">
                            <div class="form-floating">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                                <span :messages="$errors->get('password')" class="mt-2" ></span>
                              </div>
                         </div>
                            
                        <div class="d-grid gap-2 mt-5">
                            <button type="submit" class="btn bg-orange btn-lg">Confirm</button>
                           
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
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex justify-end mt-4">
            <x-primary-button>
                {{ __('Confirm') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
