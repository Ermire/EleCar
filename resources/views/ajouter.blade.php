<x-app-layout>
    <div class="detailBlock">

        <p> Ajoutez une voiture : </p>
        <form method="POST" action="{{ route('ajout') }}">
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
            <input type="text" id="modele">
            <br>

            <label> Saisissez le nombre de kilométrage : </label>
            <input type="text" id="kilometre">
            <br>

            <label> Année du véhicule : </label>
            <input type="text" id="annee" title="Uniquement des chiffres">
            <br>

            <label> Saisissez une description : </label>
            <input type="text" id="description">
            <br>

            <label> Prix de location : </label>
            <input type="text" id="prix"  title="Uniquement des chiffres">
            <br>
            <select name="classe">
                @foreach ($listClasse as $classe)
                <option value="{{$classe->classeLibelle}}"> {{$classe->classeLibelle}} </option>
                @endforeach
            </select>
            <br>
            <select name="marque">
                @foreach ($listMarque as $marque)
                <option value="{{$marque->marqueLibelle}}"> {{$marque->marqueLibelle}} </option>
                @endforeach
            </select>

            <select name="type">
                <option value="electrique">electrique </option>
                <option value="hybride">hybride</option>
            </select>
            <br>
            <input type="file">
            <br>
            <input type="submit">
        </form>

    </div>
</x-app-layout>
