<div>
    @props(['active' => false])
    @php
        $classes = $active ? 'text-sm text-green-600 font-bold' : 'text-sm text-gray-400 hover:text-gray-500';
    @endphp

    <a {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
</div>
