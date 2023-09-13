@extends('layout.main')

@section('container')
    
    @foreach ($posts as $post)
        <article class="mb-5">
            <h2>
                <a href="/home/{{ $post["slug"] }}">{{ $post["title"] }}</a>
            </h2>
            <img src="{{ asset('img/' . $post['image']) }}" width="400">
            <h5>
                By: {{ $post["author"] }}
            </h5>
            <p>
                {{ $post["body"] }}
            </p>
        </article>
    @endforeach

@endsection


