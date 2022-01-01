<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

    <title>Sports Content Subscription Site-Homepage</title>

   
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


   
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-stand-blog.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>
<body>

 
  <div class="back-to-top"></div>

  <header>
  <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>Sports Content Subscription Site<em>.</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              
          
              

              
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" style="background-color:black;" href="{{ route('login') }}">Login</a>
            </li>

            </ul>
          </div>
        </div>
      </nav>
    
  </header>



<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <h1 class="display-4" style="color:orange;">Register</h1>
            
        
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="dateOfBirth" value="{{ __('Date of Birth') }}" />
                <x-jet-input id="dateOfBirth" class="block mt-1 w-full" type="text" name="dateOfBirth" :value="old('dateOfBirth')" required autofocus autocomplete="dateOfBirth" />
            </div>

            <div class="mt-4">
                <x-jet-label for="contact" value="{{ __('Contact') }}" />
                <x-jet-input id="contact" class="block mt-1 w-full" type="text" name="contact" :value="old('contact')" required autofocus autocomplete="contact" />
            </div>

            <div>
                <x-jet-label for="cardNumber" value="{{ __('Card Number') }}" />
                <x-jet-input id="cardNumber" class="block mt-1 w-full" type="text" name="cardNumber" :value="old('cardNumber')" required autofocus autocomplete="cardNumber" />
            </div>

            <div>
                <x-jet-label for="bkashNumber" value="{{ __('Bkash Number') }}" />
                <x-jet-input id="bkashNumber" class="block mt-1 w-full" type="text" name="bkashNumber" :value="old('bkashNumber')" required autofocus autocomplete="bkashNumber" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button style="background-color:orange;" class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>


</div>
</body>
</html>
