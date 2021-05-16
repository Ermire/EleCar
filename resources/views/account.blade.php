<x-app-layout>
    @foreach ($userInfos as $user)
            
    @endforeach
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight"></h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex items-center justify-center">
                    <p class="titre"><span class="bold">Bonjour {{ $user->utilisateurPrenom }}</span></p>
                </div>
            </div>
        </div>
    </div>
    <div class="containerBlock">
        <div class="detailBlock">
            <center><p class="bold">Informations personnelles :</p></center>
            <p class="detailTitle">Adresse mail : <span class="bold">{{ $user->utilisateurEmail}}</span></p>
            <p class="detailTitle">Type de compte : <span class="bold">{{ $user->utilisateurType}}*</span></p>
            <p class="detailTitle">Date de naissance : <span class="bold">{{ $user->utilisateurDateNais}}</span></p>
            <br>
            <span class="bold">*</span><span class="italic">0 = compte client / 1 = compte administrateur</span>
        </div>
    </div>
</x-app-layout>
