@props(['active', 'href', 'icon'])

@php
    $classes = ($active ?? false)
                ? 'bg-transparent hover:bg-gray-600 font-bold text-white py-2 px-6 rounded-full'
                : 'bg-transparent hover:bg-gray-600 rounded-full text-white py-2 px-6';
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
    <div class="inline-flex items-center space-x-2 w-full">
        <x-icon :name="$icon" class="h-6 w-6"/>
        <span class="text-2xl">{{ $slot }}</span>
    </div>
</a>
