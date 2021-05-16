<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex items-center justify-center">
                    <p class="titre"><span class="bold">Ajout d'un véhicule</span></p>
                </div>
            </div>
        </div>
    </div>
    <div class="carBlock">
        <div class="ajoutBlock">
        <p>Ajoutez un véhicule : </p>
        <form method="POST" action="{{ route('ajout') }}" enctype="multipart/form-data">
            @csrf
            <p class="titleDetail">État du véhicule : <p>
            <select name="etat">
                <option value=""> -- Selectionnez un état </option>
                <option value="1">1 </option>
                <option value="2">2</option>
                <option value="3">3 </option>
                <option value="4">4 </option>
                <option value="5">5 </option>
            </select>

            <br>

            <p class="titleDetail">Saisissez le modèle : <p>
            <x-input type="text" id="modele" name="modele"/>
            <br>

            <p class="titleDetail">Saisissez le kilométrage : <p>
            <x-input type="number" id="kilometre" name="kilometre"/>
            <br>

            <p class="titleDetail">Année du véhicule : <p>
            <x-input type="number" id="annee" name="annee" title="Uniquement des chiffres"/>
            <br>

            <p class="titleDetail">Description du véhicule : <p>
            <x-input type="text" id="description" name="description"/>
            <br>

            <p class="titleDetail">Prix de la location : <p>
            <x-input type="text" id="prix" name="prix" title="Uniquement des chiffres"/>
            <br>
            <p class="titleDetail">Choissisez la classe : <p>
            <select name="classe">
                @foreach ($listClasse as $classe)
                    <option value="{{ $classe->classeId }}"> {{ $classe->classeLibelle }} </option>
                @endforeach
            </select>
            <br>
            <p class="titleDetail">Choissisez la marque : <p>
            <select name="marque">
                @foreach ($listMarque as $marque)
                    <option value="{{ $marque->marqueId }}"> {{ $marque->marqueLibelle }} </option>
                @endforeach
            </select>
            <br>
            <p class="titleDetail">Choissisez le type : <p>
            <select name="type">
                <option value="1">Électrique </option>
                <option value="2">Hybride</option>
            </select>
            <br>
            <p class="titleDetail">Image du véhicule : <p>
            <x-input type="file" id="image" name="image"/>
            <br>
            <br>
            <button type=submit class="buttonBook" id="validForm">
                {{ __('Ajouter') }}
            </button>
        </form>
        </div>
    </div>
    <br>
    <br>
</x-app-layout>
