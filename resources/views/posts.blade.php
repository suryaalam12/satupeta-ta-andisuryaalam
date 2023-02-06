@extends('layout.mlayout')

@section('container')
    <article>

        <h2>{{ $post->Judul }}</h2>

        {!! $post->body !!}

    </article>

        <a href="/post">Kembali</a>
    
@endsection
 