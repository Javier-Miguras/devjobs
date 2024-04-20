@php
    $classes = 'underline text-xs text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500';
@endphp

<div>
    <a {{$attributes->merge(['class' => $classes, 'href' => $enlace])}}>
        {{ $slot }}
    </a>
</div>