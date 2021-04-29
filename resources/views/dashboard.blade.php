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
                <tr>{{ $voiture->vehiculeId}}</tr>
                &nbsp; 
                <tr>{{ $voiture->vehiculeModele}}</tr>
            @endforeach  
        </table>      
    </div>    
</x-app-layout>
