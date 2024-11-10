@props(['text' => false])

<div @class([
    'bg-green-300' => $text,
    'card bg-red-400 p-2 rounded mx-auto my-2',
])>
    {{ $slot }}
    <div class="my-2">
        <a class="bg-green-300 p-1 rounded " href={{ $attributes->get('href') }}>View Detail</a>
    </div>
</div>
