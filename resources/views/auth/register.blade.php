<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Nom -->
            <div>
                <x-label for="utilisateurNom" :value="__('Nom')" />

                <x-input id="utilisateurNom" class="block mt-1 w-full" type="text" name="utilisateurNom" :value="old('utilisateurNom')" required autofocus />
            </div> 

            <!-- Prenom -->
            <div>
                <x-label for="utilisateurPrenom" :value="__('Prenom')" />

                <x-input id="utilisateurPrenom" class="block mt-1 w-full" type="text" name="utilisateurPrenom" :value="old('utilisateurPrenom')" required autofocus />
            </div>

            <!-- Adresse mail -->
            <div class="mt-4">
                <x-label for="utilisateurEmail" :value="__('Adresse mail')" />

                <x-input id="utilisateurEmail" class="block mt-1 w-full" type="email" name="utilisateurEmail" :value="old('utilisateurEmail')" required />
            </div>

            <!-- Date de naissance -->
            <div>
                <x-label for="utilisateurDateNais" :value="__('Date de naissance')" />

                <x-input id="utilisateurDateNais" class="block mt-1 w-full" type="date" name="utilisateurDateNais" :value="old('utilisateurDateNais')" required autofocus />
            </div>

            <!-- Mot de passe -->
            <div class="mt-4">
                <x-label for="utilisateurMdp" :value="__('Mot de passe')" />

                <x-input id="utilisateurMdp" class="block mt-1 w-full"
                                type="password"
                                name="utilisateurMdp"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirmation Mot de passe -->
            <div class="mt-4">
                <x-label for="utilisateurMdp_confirmation" :value="__('Confirmation mot de passe')" />

                <x-input id="utilisateurMdp_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="utilisateurMdp_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Déjà enregistré ?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Enregistrer') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
