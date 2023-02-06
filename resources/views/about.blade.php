@extends('layout.mlayout')

@section('container')
    <h1>Halaman Tentang</h1>
    <h2>{{ $nama }}</h2>
    <p>{{ $email }}</p>
    <img src="image/{{ $image }}" alt="{{ $nama }}" width="200px">
@endsection

