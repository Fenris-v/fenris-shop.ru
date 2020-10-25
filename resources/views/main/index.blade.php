@extends('layouts.layout')

@section('title', 'Главная')

@section('content')

    @include('main.sections.banner')

    @include('main.sections.categories_block')

    @if(isset($goods))
        @include('main.sections.items')
    @endif

    @include('main.sections.bottom_banner')

    @include('main.sections.feedback')

@endsection
