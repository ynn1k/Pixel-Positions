@php
    $classes = 'p-4 bg-white/5 rounded-xl flex border border-transparent hover:border-blue-400 group transition duration-300';
@endphp

<div {{$attributes(['class' => $classes])}}>
    {{$slot}}
</div>
