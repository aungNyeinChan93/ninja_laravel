<x-layout>
    <div class="container text-center">
        <h1>User Create</h1>

        <form action="{{ route('Users.createProcess') }}" method="POST">
            @csrf
            <input type="text" name="name" class="form-control my-2" placeholder="username">
            @error('name')
                {{ $message }}
            @enderror
            <input type="email" name="eamil" class="form-control my-2" placeholder="email">
            @error('email')
                {{ $message }}
            @enderror
            <button type="submit">Create</button>
        </form>
    </div>
</x-layout>
