<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tableau de bord') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex items-center justify-center">
                   Tableau de bord
                </div>
            </div>
        </div>
    </div>
        <div class="card">
            <div class="card-body">
                @foreach ($listCar as $voiture)
                <img class="imgCard" src="img/{{ $voiture->vehiculeImage }}">
                    &nbsp;
<<<<<<< HEAD
                    @csrf
                    <form method="GET" action="{{ route('detail') }}">
                        <tr>{{ $voiture->vehiculeId }}</tr>
                        &nbsp;
                        <tr>{{ $voiture->vehiculeModele }}</tr>
                        <br>
                        <div class="flex items-center mt-4">
                            <x-button class="ml-3">
                                {{ __('Détail') }}
                            </x-button>
                        </div>
                    </form>
                @endforeach
            </div>
        </div>
=======
                    <tr>{{ $voiture->vehiculeModele }}</tr>
                    <br>
                    <img class="imgCard" src="img/{{ $voiture->vehiculeImage }}">
                    <div class="flex items-center mt-4">
                        <input class="ml-3" type="submit" value="{{ __('Détail') }}">
                       
                    </div>
                    <input type="hidden" name="id" value="{{ $voiture->vehiculeId }}">
                </form>
            @endforeach
        </table>
>>>>>>> 0ca2072b3dd17e4baf7b888f29f5c2888365b511
    </div>
</x-app-layout>