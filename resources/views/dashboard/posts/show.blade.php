@extends('dashboard.layouts.main')
@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h1 class="mb-3">{{ $post->title }}</h1>
                <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left" class="align-text-bottom"></span> Back to Posts</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit" class="align-text-bottom"></span> Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                    @csrf
                    @method('delete')

                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')">
                        <span data-feather="x-circle" class="align-text-bottom"></span>Delete
                    </button>
                </form>
                <br>
                @if ($post->image)
                <div style="max-height: 350px; overflow: hidden;">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="mt-2">
                </div>
                
                @else
                <img src="https://source.unsplash.com/500x250?{{ $post->category->slug }}" alt="{{ $post->category->name }}" class="mt-2">
                @endif
                
                <p>{!! $post->body !!}</p>

                

            </div>
        </div>
    </div>
@endsection
