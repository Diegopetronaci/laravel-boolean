@extends('app')

    @section('content')
        
        @foreach ($posts as $post)
            <h2> {{ $post->titolo }} </h2>
        @endforeach


    @endsection