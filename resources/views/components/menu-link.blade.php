@props(['href'])

@php
    $href = $href ?? '';
@endphp

<a href="{{ route($href) }}" class="{{ request()->routeIs($href) ? 'bg-blue-600 text-white hover:bg-blue-700 dark:hover:bg-gray-700' : 'text-gray-900 hover:bg-gray-200 dark:text-white dark:hover:bg-gray-700' }} flex items-center ml-2 p-2 pl-11 w-full text-base font-normal rounded-lg transition duration-75 group">{{ $slot }}</a>
