@props(['route'])

@php
    $route = $route ?? '';
@endphp

{!! request()->Is($route) ? '<span class="absolute inset-y-0 left-0 w-[3.5px] bg-blue-600 rounded-tr-lg rounded-br-lg"></span>' : '' !!}
