@extends('layouts.main')
@section('container')
    <h1 class="mb-5">{{ $title }}</h1>

    <div class="container">
        <div class="row">
            @foreach ($listOfs as $list)
                <div class="col-md-4">
                    @if ($title === 'Categories')
                        <a href="/posts?category={{ $list->slug }}">
                            <div class="card text-bg-dark mb-4">
                                <img src="https://source.unsplash.com/500x500?{{ $list->slug }}" class="card-img"
                                    alt="...">
                                <div class="card-img-overlay d-flex align-items-center p-0">
                                    <h5 class="card-title p-1 text-center flex-fill"
                                        style="background-color: rgba(0, 0, 0, 0.5)">{{ $list->name }}</h5>
                                </div>
                            </div>
                        </a>
                    @else
                        <a href="/posts?author={{ $list->username }}">
                            <div class="card text-bg-dark mb-4">
                                <img src="https://source.unsplash.com/500x500?{{ mt_rand(1, 10) }}" class="card-img"
                                    alt="...">
                                <div class="card-img-overlay d-flex align-items-center p-0">
                                    <h5 class="card-title p-1 text-center flex-fill"
                                        style="background-color: rgba(0, 0, 0, 0.5)">{{ $list->name }}</h5>
                                </div>
                            </div>
                        </a>
                    @endif

                </div>
            @endforeach
        </div>
    </div>


@endsection
