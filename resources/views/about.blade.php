@extends('layouts.main')

@section('container')
    <h1>{{ $name }}</h1>
    <p>{{ $email }}</p>
    <img src="img/{{ $img }}" alt="{{ $name }}">
@endsection