<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex items-center justify-center">
                    <p class="titre"><span class="bold">Nos voitures en location !</span></p>
                </div>
            </div>
        </div>
    </div>
        <div class="carBlock">
    @foreach ($userType as $user)
        @if ($user->utilisateurType == 1)
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                <x-nav-link :href="route('ajouter')" :active="request()->routeIs('ajouter')">
                    {{ __('Ajouter une voiture') }}
                </x-nav-link>
            </div>
        @endif
    @endforeach
        </div>
    <div class="carBlock">
        @foreach ($listCar as $voiture)
            <div class="card">
                <div class="card-body">
                    <img class="imgCard" src="img/{{ $voiture->vehiculeImage }}">
                    <hr>
                    @csrf
                    <form method="GET" action="{{ route('detail') }}">
                        <p class="titleDetail"><span class="bold">Modèle : </span>{{ $voiture->vehiculeModele }}</p>
                        <p class="titleDetail"><span class="bold">Année : </span>{{ $voiture->vehiculeAnnee }}</p>
                        <p class="titleDetail"><span class="bold">Kilométrage : </span>{{ $voiture->vehiculeKm }} km
                        </p>
                        <p class="titleDetail"><span class="bold">Prix location :
                            </span>{{ $voiture->vehiculePrixLoc }} €</p>
                        <div class="flex items-center justify-center mt-4">
                            <input class="buttonDetail" type="submit" value="{{ __('Détail') }}">
                            <input type="hidden" name="id" value="{{ $voiture->vehiculeId }}">
                        </div>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>
