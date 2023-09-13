@extends('layout.main')

@section('container')
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200" height="200" class="img-thumbnail rounded-circle">  
@endsection