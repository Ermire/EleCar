<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tableau de bord') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Vous êtes connecté !
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <table>

            @foreach ($listCar as $voiture)
                &nbsp;
                @csrf
                <form method="GET" action="{{ route('detail') }}">
                    <tr>{{ $voiture->vehiculeId }}</tr>
                    &nbsp;
                    <tr>{{ $voiture->vehiculeModele }}</tr>
                    <br>
                    <img src="img/{{ $voiture->vehiculeImage }}">
                    <div class="flex items-center mt-4">
                        <input class="ml-3" type="submit" value="{{ __('Détail') }}">
                       
                    </div>
                    <input type="hidden" name="id" value="{{ $voiture->vehiculeId }}">
                </form>
            @endforeach
        </table>
    </div>
</x-app-layout>
