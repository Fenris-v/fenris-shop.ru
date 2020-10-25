@extends('layouts.layout')

@section('title', 'Каталог')

@section('content')

    <div class="pt-5 mb-5 container">
        <div class="row">
            @include('item.item')
        </div>
    </div>

@endsection
