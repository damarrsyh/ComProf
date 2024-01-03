@extends('layout.main')

@section('pages')

        @include('home.header.index')
        @include('home.summary.index')
        @include('home.gallery.index')
        @include('home.services.index')
        @include('home.about.index')
        @include('home.history.index')
        @include('home.structure.index')
        @include('home.partner.index')

@endsection