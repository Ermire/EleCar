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
            <input type="text" id="annee" pattern="[0-9]" title="Uniquement des chiffres">
            <br>

            <label> Saisissez une description : </label>
            <input type="text" id="description">
            <br>

            <label> Prix de location : </label>
            <input type="text" id="prix" pattern="[0-9]" title="Uniquement des chiffres">
            <br>

            <input type="submit">
        </form>

    </div>
</x-app-layout>
