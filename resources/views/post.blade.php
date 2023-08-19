@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>{{ $post->title }}</h1>
            <p>By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
            @if ($post->image)
                <div style="max-height: 350px; overflow: hidden;">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}class="mt-2">
                </div>
                
                @else
                <img src="https://source.unsplash.com/500x250?{{ $post->category->slug }}" alt="{{ $post->category->name }}">

                @endif
            <p>{!! $post->body !!}</p>

            <a href="/posts" class="btn btn-secondary">Back</a>

        </div>
    </div>
</div>



@endsection