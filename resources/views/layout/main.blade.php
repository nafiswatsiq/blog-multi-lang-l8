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
        <title>Multi Languange Blogs</title>
        @endif
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
        <div class="container mt-5">
            
            @yield('content')

        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>