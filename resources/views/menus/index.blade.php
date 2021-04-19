@extends('layouts.guest')

@section('title', 'Menu')

@section('content')
    <section class="py-20 bg-white mt-10">
        <div class="container max-w-6xl mx-auto">
            <h2 class="text-4xl font-bold tracking-tight text-center">{{ __('Menu Spesial') }}</h2>
            <p class="mt-2 text-lg text-center text-gray-600">Gambar berikut dapat menyegarkan mata anda.</p>
            
            @livewire('menus')
        </div>
    </section>
@endsection
