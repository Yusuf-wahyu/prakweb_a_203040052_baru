@extends('layouts.main')

@section('container')

    @foreach ($categories as $category)
    <ul>
        <li>
        <h2>
            <a href="/blog/{{ $post->slug }}"> {{ $category->name }}</a>
        </h2>
        </li>
    </ul>

        <!-- <h5>By: {{ $post ['author'] }}</h5> -->
        <p>{{ $post->excerpt }}</p>
    @endforeach

@endsection
