@extends('layouts.master')

@section('content')
    <div>Search results</div>

    @foreach(array_chunk($photos->all(), 5) as $threePhotos)
        <div class="row">
            @foreach($threePhotos as $photo)
                <a href="{{ route('flickr.photo', $photo['id']) }}">
                <a href="{{ $photo['id'] }}">
                    <img src="{{ $photo['url'] }}">
                </a>
            @endforeach
        </div>
    @endforeach

    <div>{!! $photos->links() !!}</div>

@endsection