<x-app-layout>
    <div class="detailBlock">

        <p> Ajoutez une voiture : </p>
        <form method="POST" action="{{ route('ajout') }}" enctype="multipart/form-data">
            @csrf
            <select name="etat">
                <option value=""> -- Selectionnez un etat </option>
                <option value="1">1 </option>
                <option value="2">2</option>
                <option value="3">3 </option>
                <option value="4">4 </option>
                <option value="5">5 </option>
            </select>

            <br>

            <label> Saisissez le modèle : </label>
            <x-input type="text" id="modele" name="modele"/>
            <br>

            <label> Saisissez le nombre de kilométrage : </label>
            <x-input type="number" id="kilometre" name="kilometre"/>
            <br>

            <label> Année du véhicule : </label>
            <x-input type="number" id="annee" title="Uniquement des chiffres"/>
            <br>

            <label> Saisissez une description : </label>
            <x-input type="text" id="description" name="description"/>
            <br>

            <label> Prix de location : </label>
            <x-input type="text" id="prix" name="prix" title="Uniquement des chiffres"/>
            <br>
            <select name="classe">
                @foreach ($listClasse as $classe)
                    <option value="{{ $classe->classeId }}"> {{ $classe->classeLibelle }} </option>
                @endforeach
            </select>
            <br>
            <select name="marque">
                @foreach ($listMarque as $marque)
                    <option value="{{ $marque->marqueId }}"> {{ $marque->marqueLibelle }} </option>
                @endforeach
            </select>
            <br>
            <select name="type">
                <option value="1">electrique </option>
                <option value="2">hybride</option>
            </select>
            <br>
            <x-input type="file" id="image" name="image"/>
            <br>
            <x-input type="submit"/>
        </form>

    </div>
</x-app-layout>
