<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        @foreach ($oneCar as $voiture)

            <p> Marque de la voiture : {{ $voiture->marqueLibelle }}</p>

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
            Choissisez un type de contrat
            <select>
                <option value=""> -- Selectionnez une option </option>
                <option>Location </option>
                <option>Location grande durée</option>
                <option>Location avec option d'achat </option>
            </select>
        @endforeach
    </div>
</x-app-layout>
