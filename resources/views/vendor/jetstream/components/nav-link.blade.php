@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 focus:outline-none bg-active-comp text-active-comp transition'
            : 'inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 focus:outline-none bg-comp-hover text-comp text-comp-hover transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
