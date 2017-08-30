@extends('layouts.master')

@section('content')
    <div class="row">
        <h2>{{ $photo['title'] }}</h2>
        <p>{{ $photo['description'] }}</p>
        <img src="{{ $photo['url'] }}">
    </div>
@endsection