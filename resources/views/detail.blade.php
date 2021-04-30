<x-app-layout>
    <div>
        <p>Detail de vago</p>
        @foreach ($oneCar as $voiture)
            <p> Marque de la voiture : {{ $voiture->marqueLibelle }}</p>
        @endforeach
    </div>
</x-app-layout>
