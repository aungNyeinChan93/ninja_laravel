@extends('Layout.master')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-2xl text-red-500">User List</h1>
        <p class="my-4">
            <a class="btn bg-red-400 p-1 my-2 rounded shadow-sm " href="{{ route('Users.create') }}">User Create</a>
        </p>
        <div class="my-2">
            <a href="{{ route('home') }}" class="btn bg-blue-400 p-1 rounded shadow-sm">Go to home</a>
        </div>
        <hr>
        <ul>
            @foreach ($users as $user)
                <li>
                    <x-user-card :bg="$user->id > 0" href="{{ route('Users.detail', $user->id) }}">
                        <h3>{{ $user->name }}</h3>
                    </x-user-card>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
