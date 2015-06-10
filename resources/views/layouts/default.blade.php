<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="examination results resarch">
	<title>@yield('title')</title>

	<link href="/css/score.css" rel="stylesheet">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="icon" href="/favicon.ico">
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                {{-- The Responsive Menu Button --}}
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                {{-- The CMS Home Button --}}
                <a class="navbar-brand" href="{{ url( $urlSegment ) }}">{{ $app_name }}</a>
            </div>
            {{-- The menu items at the top (collapses down when browser gets small) --}}
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                @if($menu_items)
                    <div class="list-group">
                        @foreach($menu_items as $url=>$item)
                            <a class="list-group-item {{ Request::is( "$urlSegment/$url*" ) ? 'active' : '' }}" href="{{ url( $urlSegment.'/'.$url ) }}">
                                <span class="glyphicon glyphicon-{{ $item['icon'] }}"></span> {{ $item['name'] }}
                            </a>
                        @endforeach
                    </div>
                @endif
            </div>
            <div class="col-sm-9">
                @yield('content')
            </div>
        </div>
    </div>
    <div class="container">
        <hr>
        <footer>
            <p>&copy; {{ $app_name }} {{ date('Y') }}</p>
        </footer>
    </div><!--/.container-->
</body>
</html>

