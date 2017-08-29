@extends('layouts.master')

@section('content')
    <div class="jumbotron">
        <div class="content">
            <div class="title m-b-md">
                Flickr Photo Search
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="container">
                <div class="links">
                    {{ Form::open(array(
                        'url' => 'flickr/search'
                    )) }}

                    <div class="form-group input-group-lg">
                        {{ Form::text('search', null, [
                            'class' => 'form-control',
                            'placeholder' => 'Search photos by tags...'
                        ]) }}
                    </div>
                    {{ Form::submit('Flickr Search', ['class' => 'btn btn-primary btn-lg']) }}

                    {{ Form::token() }}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@endsection

