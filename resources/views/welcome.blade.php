<x-guest-layout>
    <x-slot name="header">
        @include('layouts.elements.nav')
        @include('layouts.elements.hero')
    </x-slot>

    @livewire('home.content-section')
    @livewire('home.gallery-section')
    @livewire('home.testimoni-section')

    @include('layouts.elements.footer')
</x-app-layout>
