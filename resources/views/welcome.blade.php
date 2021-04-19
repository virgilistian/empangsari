@extends('layouts.guest')

@section('title', 'Beranda')

@section('hero')
    @include('layouts.elements.hero')
@endsection

@section('content')

    @livewire('home.content-section')
    @livewire('home.gallery-section')
    <div id="testi">
        @livewire('home.testimoni-section')
    </div>

@endsection
