@extends('layout.main')

@section('pages')

        @include('home.services.index')
        @include('home.about.index')
        @include('home.history.index')
        @include('home.structure.index')

@endsection