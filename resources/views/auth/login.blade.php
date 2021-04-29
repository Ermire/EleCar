<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <img class="logo2" src="{{ asset('img/logo.png') }}">
        </x-slot>

         <!-- Session Status -->
         <x-auth-session-status class="mb-4" :status="session('status')" />

         <!-- Validation Errors -->
         <x-auth-validation-errors class="mb-4" :errors="$errors" />
 
         <form method="POST" action="{{ route('login') }}">
             @csrf
 
             <!-- Adresse mail -->
             <div>
                 <x-label for="utilisateurEmail" :value="__('Adresse mail')" />
 
                 <x-input id="utilisateurEmail" class="block mt-1 w-full" type="email" name="utilisateurEmail" :value="old('utilisateurEmail')" required autofocus />
             </div>
 
             <!-- Mot de passe -->
             <div class="mt-4">
                 <x-label for="password" :value="__('Mot de passe')" />
 
                 <x-input id="password" class="block mt-1 w-full"
                                 type="password"
                                 name="password"
                                 required autocomplete="current-password" />
            </div>   
            <x-label>Pas encore inscrit ?<a class="linkRegister" href="{{ route('register') }}">
                {{ __('S\'inscrire') }}
            </a></x-label>
             <div class="flex items-center justify-center mt-4">
                 <x-button class="ml-3">
                     {{ __('Connexion') }}
                 </x-button>
                </div>
         </form>
     </x-auth-card>
 </x-guest-layout>