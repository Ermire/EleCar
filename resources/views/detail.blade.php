<x-app-layout>
    <div>
        <p>Detail de vago</p>
        @foreach ($oneCar as $voiture)
            <p> Maque de la voiture : {{ $voiture->marqueLibelle }}</p>
        @endforeach
    </div>
</x-app-layout>
