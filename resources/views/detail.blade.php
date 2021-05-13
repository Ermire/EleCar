<x-app-layout>
    @foreach ($oneCar as $voiture)
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200 flex items-center justify-center">
                        <p class="titre">Informations de la voiture : <span
                                class="bold">{{ $voiture->vehiculeModele }}</span></p>
                    </div>
                </div>
            </div>
        </div>
        <center>
            <div class="detailBlock">
                <p class="titre">Détails de la voiture : <span class="bold">{{ $voiture->vehiculeModele }}</span></p>
                <!-- Date de début de location -->
                <div class="mt-4">
                    <img class="imgCard" src="img/{{ $voiture->vehiculeImage }}">
                    <hr>
                    <p class="titleDetail"><span class="bold">Marque : </span>{{ $voiture->marqueLibelle }}</p>
                    <p class="titleDetail"><span class="bold">Modèle : </span>{{ $voiture->vehiculeModele }}</p>
                    <p class="titleDetail"><span class="bold">Classe : </span>{{ $voiture->classeLibelle }}</p>
                    <p class="titleDetail"><span class="bold">Type véhicule : </span>{{ $voiture->typeVehicule }}</p>
                    <p class="titleDetail"><span class="bold">Description : </span>{{ $voiture->vehiculeDesc }}</p>
                    <p class="titleDetail"><span class="bold">Année : </span>{{ $voiture->vehiculeAnnee }}</p>
                    <p class="titleDetail"><span class="bold">Kilométrage : </span>{{ $voiture->vehiculeKm }} km</p>
                </div>
            </div>
            &emsp;
            <div class="detailBlock">
                <form method="POST" action="{{ route('reservation') }}">
                    @csrf
                    <p class="titre">Contrat de location</p>
                    <!-- Date de début de location -->
                    <div class="mt-4">
                        <x-label for="debutLocation" :value="__('Debut de location')" />
                        <x-input id="debutLocation" class="block mt-1 w-full" type="date" name="debutLocation"
                            :value="old('debutLocation')" required />
                    </div>
                    <!-- Date de fin de location -->
                    <div class="mt-4">
                        <x-label for="finLocation" :value="__('Fin de location')" />
                        <x-input id="finLocation" class="block mt-1 w-full" type="date" name="finLocation"
                            :value="old('finLocation')" required />
                    </div>
                    <br>
                    <x-label :value="__('Choissisez une assurance')" />
                    <select name="assurance">
                        <option value="basique">Basique </option>
                        <option value="tout_risque">Tout risque</option>
                    </select>
                    <br>
                    <div class="mt-4">
                        <p>Prix de la location : <span class="bold">{{ $voiture->vehiculePrixLoc }} €</span></p>
                    </div>
                    <input type="hidden" name="idVehicule" value="{{ $voiture->vehiculeId }}">
                    <!--<div>
                        <label><?php echo "<input type='checkbox'";?> &nbsp; <?= __("<a> J'accepte et reconnais avoir lu les termes et conditions</a>")?></label>
                    </div>-->
                    <form action="/checkbox-example" method="POST">
                            @csrf
                            <input type="checkbox" name="terms">
                            <label>Je reconnais avoir lu les termes et conditions</label><a class = "redstar">*</a><br/><br/>
                            <button type=submit class="buttonBook" id="validForm">
                                {{ __('Réserver') }}
                            </button>
                    </form>
                    <div class="mt-4">
                    </div>
                </form>
            </div>
        </center>
    @endforeach
</x-app-layout>
