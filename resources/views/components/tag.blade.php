@props(['size' => 'base'])

@php
    $classes = "bg-white/10 hover:bg-white/25  font-bold px-3 py-1 rounded-xl transition colors duration-300";
    if ($size === 'base')
    {
        $classes = " px-4 py-1 text-sm";
    };

    if ($size === 'small')
    {
        $classes = " px-3 py-1 text-xss";
    };
@endphp

<a href="#" class="{{ $classes }}">{{ $slot }}</a>