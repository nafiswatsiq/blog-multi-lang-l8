<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       <!-- Bootstrap CSS -->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
        @isset($category)
        <title>{{ $category->name }}</title>
        <meta name="title" content="{{ $category->name }}">
        <meta name="description" content="{{ $category->meta_desc }}">
        <meta name="keywords" content="{{ $category->keywords }}">
        @endisset
        @isset($tag)
        <title>{{ $tag->name }}</title>
        <meta name="title" content="{{ $tag->name }}">
        <meta name="description" content="{{ $tag->meta_desc }}">
        <meta name="keywords" content="{{ $tag->keywords }}">
        @endisset
        @if (!isset($tag) && !isset($category))
        <title>Blog</title>
        @endif
    </head>
    <body>
        <div class="container mt-5">
            @isset($category)
            <h1 class="text-center my-3">Blog Category: {{ $category->name }}</h1>
            @endisset
            @isset($tag)
            <h1 class="text-center my-3">Blog Tag: {{ $tag->name }}</h1>
            @endisset
            @if (!isset($tag) && !isset($category))
            <h1 class="text-center my-3">Blog</h1>
            @endif
            <div class="row">
                @foreach ($posts as $item)
                <div class="col-4 mt-3">
                    <div class="card p-3">
                        <img src="{{ asset('storage/'.$item->cover) }}" class="card-img-top" style="
                        height: 340px; 
                        overflow:hidden;  
                        -o-object-fit: cover;
                        object-fit: cover;
                        overflow: hidden;
                        display: -webkit-box;
                        display: -ms-flexbox;
                        display: flex;
                        -webkit-box-align: center;
                        -ms-flex-align: center;
                        align-items: center;
                        border-radius: 10px;" alt="...">
                        <div class="card-body">
                            <a href="{{ route('show', $item->slug) }}" class="text-dark">
                                <h5 class="card-title">{{ $item->title }}</h5>
                            </a>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex mx-auto">
                                @foreach ($item->tags as $tags)
                                <a href="{{ route('tag', $tags->slug) }}" class="badge badge-secondary mr-1">{{ $tags->name }}</a>
                                @endforeach
                                <small class="text-muted ml-auto">{{ Carbon\Carbon::parse($item->created_at)->diffForHumans()}}</small>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    </body>
</html>