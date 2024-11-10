<x-layout>
    <h1>Ninjas</h1>
    @foreach ($ninjas as $ninja)
        <x-card href="{{ route('ninjas.detail', $ninja->id) }}">
            <h3>{{ $ninja->name }}</h3>
            <p>{{ $ninja->bio }}</p>
        </x-card>
    @endforeach
</x-layout>
