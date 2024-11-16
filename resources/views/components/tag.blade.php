@props(['size' => 'base'])

@php
    $classes = 'bg-white/10 hover:bg-white/25 rounded-full transition duration-300 ';

    switch ($size) {
        case 'base':
            $classes .= 'px-6 py-2 text-md';
        case 'small':
            $classes .= 'px-3 py-1 text-xs';
    }
@endphp

<a href="#" class="{{$classes}}">{{$slot}}</a>
