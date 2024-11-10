@props(['bg' => false])

<div @class([
    'bg-red-300' => $bg,
    'user-card text-center p-3 my-2 mx-3 rounded',
])>
    {{ $slot }}
    <a {{ $attributes }}>View UserDetail</a>
</div>
