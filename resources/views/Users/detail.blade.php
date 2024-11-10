<x-layout>
    <div class="container">
        <h1>User Detail</h1>
        <p>User Id : {{ $id }}</p>
        <h4>{{ $user->name }}</h4>
        <p>{{ $user->email }}</p>
        <button> <a href="{{ route('test') }}">back</a></button>
         

    </div>
</x-layout>
