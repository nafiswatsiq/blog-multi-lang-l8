{{-- @include('layout.main') --}}
@extends('layout.main')
@section('content')

    @isset($category)
    <h1 class="text-center my-3">Blog Category: {{ $category->name }}</h1>
    @endisset
    @isset($tag)
    <h1 class="text-center my-3">Blog Tag: {{ $tag->name }}</h1>
    @endisset
    @if (!isset($tag) && !isset($category))
    <h1 class="text-center my-3">Blog</h1>
    @endif
    <div class="row gap-3">
        <div class="row">
            @foreach ($posts as $item)
            <div class="col-6">
                <div class="card mb-3 p-0">
                    <div class="row g-0">
                        <a href="{{ route('show', $item->slug) }}" class="col-md-4 d-flex align-items-center">
                            <img src="{{ asset('storage/'.$item->cover) }}" class="img-fluid rounded-start" style="
                            height: 100%; 
                            overflow:hidden;  
                            -o-object-fit: cover;
                            object-fit: cover;
                            overflow: hidden;
                            display: -webkit-box;
                            display: -ms-flexbox;
                            display: flex;
                            -webkit-box-align: center;
                            -ms-flex-align: center;
                            align-items: center;" alt="...">
                        </a>
                        <div class="col-md-8">
                            <div class="card-body">
                                <a href="{{ route('show', $item->slug) }}" class="text-decoration-none">
                                    <div >
                                        <h5 class="card-title" >{{ $item->title }}</h5>
                                        <p class="text-muted">{{  Str::limit( strip_tags( $item->desc ), 170 ) }}</p>
                                    </div>
                                </a>
                                <div class="d-flex mx-auto justify-content-between">
                                    <div>
                                        @foreach ($item->tags as $tags)
                                        <a href="{{ route('tag', $tags->slug) }}"><span class="badge bg-secondary">{{ $tags->name }}</span></a>
                                        @endforeach
                                    </div>
                                    <small class="text-muted ml-auto">{{ Carbon\Carbon::parse($item->created_at)->diffForHumans()}}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection