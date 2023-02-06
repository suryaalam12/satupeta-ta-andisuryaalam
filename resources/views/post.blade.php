@extends('layout.mlayout')

@section('container')

    <article class="mb-5">
        @foreach($post as $post)
        <h2>
            <a href="/post/{{ $post->id }}">{{ $post->Judul }}</a>
        </h2>
        <p>{{ $post->paragraf }}</p>
    </article>
    
    @endforeach
@endsection
 
