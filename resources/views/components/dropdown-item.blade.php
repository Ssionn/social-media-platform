@props(['to'])

@php
    $navlinkActive = \Illuminate\Support\Str::startsWith(request()->url(), $to)
        ? 'bg-indigo-100 text-indigo-600'
        : 'text-gray-700';
@endphp

<a
    href="{{ $to }}"
    {{
        $attributes->merge([
            'class' => 'truncate rounded-lg px-4 py-1 block hover:bg-gray-600 transition duration-200 ease-out '. $navlinkActive
        ])
    }}>
    {{ $slot }}
</a>
