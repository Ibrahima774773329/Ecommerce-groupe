


{{-- <x-guest-layout>



    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
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
                            name="password_confirmation" required autocomplete="new-password" />

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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ url('https://fonts.googleapis.com/css?family=Inter%3A700') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C500%2C700"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins%3A400%2C500"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        .account{
            background-color: #db4444!important;
        }
    .bi-search{
        position: relative;
        right: 3vh;
        top: 2vh;
    }
    #navbarNav{
    margin-left: 25vh;
    /* margin-top: 8px; */
}
    </style>
</head>
<body>


    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
            <a class="navbar-brand text-black fw-bold fs-3" href="#">Exclusive</a>
            <!-- Bouton de basculement pour les petits écrans -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Contenu de la barre de navigation -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link text-black" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="{{route('contact')}}">Contact</a>
                    </li>
                    <li class="nav-item  ">
                        <a class="nav-link text-black" href="{{route('register')}}">Sign Up</a>
                    </li>
                </ul>
                    <form class="d-flex mx-5">
                        <input class="form-control border-0" type="search" placeholder="what are you looking for?" aria-label="Search" style="  background-color: #f2f2f2;">
                        <i class="bi bi-search"></i>
                    </form>
    </nav>
    <hr>
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6 col-md-12 ">
                <img src="./assets/phone.png" alt="" width="100%" height="100%">
            </div>
            <div class="col-lg-5 col-md-12">
                <h1>Create an Account</h1>
                <p class="para3">Enter your details below</p>
            <form  method="POST" action="{{ route('register') }}">
                @csrf

                    <div class="mb-3">
                      <label class="form-label" for="name" :value="__('Name')">Your Name</label>
                      <input type="text" class="form-control" name="name" id="name" :value="old('name')" aria-describedby="nameHelp">
                      {{-- <input type="error" :messages="$errors->get('name')" class="mt-2" /> --}}
                    </div>

                    <div class="mb-3">
                      <label  class="form-label" for="email" :value="__('Email')">Your Email</label>
                       <input type="email" class="form-control" name="email" id="email" :value="old('email')" aria-describedby="emailHelp">
                       {{-- <input type="error" :messages="$errors->get('email')" class="mt-2" /> --}}
                    </div>


                    <div class="mb-3">
                      <label for="password"  class="form-label" :value="__('Password')"> Your Password</label>
                      <input type="password" class="form-control" name="password" id="password">
                      {{-- <input type="error" :messages="$errors->get('password')" class="mt-2" /> --}}
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation"  class="form-label" :value="__('Confirm Password')">confirm Password</label>
                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" required autocomplete="new-password">
                        {{-- <input type="error" :messages="$errors->get('Confirm Password')" class="mt-2" /> --}}
                      </div>
                    <div>
                       <a href="{{('login')}}"><button type="submit" class="btn btn-danger btn1 p-3 account">Create Account

                              {{ __('Register') }}
                        </button></a>

                      <!-- {{-- <img src="./assets/icon-google.png" alt="" width="6%"> <a href="{{route('google-auth')}}"> Sign up with Google</a> --}}
                      {{-- <a href="{{route('google-auth')}}">Continuer google</a> --}} -->
                    </div>
                      <div class="d-flex pt-3">
                        <p class="para3 me-3">Already have account?</p>
                        <a href="{{ route('login') }}" class="lg1"> Log in
                            {{ __('Already registered?') }}
                        </a>
                    </div>


                  </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    @include('partial.footer')
</body>
</html>





