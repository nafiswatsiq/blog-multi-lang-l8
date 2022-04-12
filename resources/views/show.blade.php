<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Primary Meta Tags -->
        <title>{{ $post->title }}</title>
        <meta name="title" content="{{ $post->title }}">
        <meta name="description" content="{{ $post->meta_desc }}">
        <meta name="keywords" content="{{ $post->keywords }}">
        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="article">
        <meta property="og:url" content="{{ URL::current() }}">
        <meta property="og:title" content="{{ $post->title }}">
        <meta property="og:description" content="{{ $post->meta_desc }}">
        <meta property="og:image" content="{{ asset('storage/'.$post->cover) }}">
        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="{{ URL::current() }}">
        <meta property="twitter:title" content="{{ $post->title }}">
        <meta property="twitter:description" content="{{ $post->meta_desc }}">
        <meta property="twitter:image" content="{{ asset('storage/'.$post->cover) }}">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container">
                <a class="navbar-brand" href="/">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">{{ trans('sentence.home')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">{{ trans('sentence.features')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">{{ trans('sentence.pricing')}}</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                @if (trans('sentence.lang') == 'en')
                                    EN
                                @elseif (trans('sentence.lang') == 'id')
                                    ID
                                @else
                                    EN/ID
                                @endif
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="{{ URL('lang/en') }}">EN</a></li>
                                <li><a class="dropdown-item" href="{{ URL('lang/id') }}">ID</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="d-flex">
                    <a href="{{ route('home') }}" class="navbar-text text-decoration-none">
                        Admin
                    </a>
                </div>
            </div>
        </nav>

        <div class="container my-5">
            <div class="row">
                <div class="card border-0">
                    {{-- <div class="d-flex justify-content-center">
                        <img src="{{ asset('storage/'.$post->cover) }}" alt="" class="img-fluid" style="max-width: 500px;">
                    </div> --}}
                    <div class="card-body">
                        <h1 class="card-title">{{ $post->title }}</h1>
                        <div class="d-flex my-2">
                            <small class="text-muted">by {{ $post->user->name }} ・ {{ Carbon\Carbon::parse($post->created_at)->isoFormat('D MMMM Y'); }}</small>
                        </div>
                        {{-- <div class="summernote">{{ $post->desc }}</div> --}}
                        <div id="summernote"><?php echo $post->desc  ?></div>
                        
                        <div class="card-footer bg-transparent d-flex mx-auto">
                            <a href="{{ route('category',$post->category->slug) }}" class="text-dark me-2">{{ $post->category->name }}</a>
                            <div class="d-flex ml-auto gap-2">
                                @foreach ($post->tags as $item)
                                <a href="{{ route('tag', $item->slug) }}"><span class="badge bg-secondary">{{ $item->name }}</span></a>
                                @endforeach                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script>
        </script>
    </body>
</html>