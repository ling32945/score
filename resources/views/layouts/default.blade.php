<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="examination results resarch">
	<title>Examination Results</title>

	<link href="/css/score.css" rel="stylesheet">
	<link rel="stylesheet" href="/css/stylesheet">
</head>
<body class="">
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">

                <div class="navbar-header">

                    {{-- The Responsive Menu Button --}}
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    {{-- The CMS Home Button --}}
                    <a class="navbar-brand" href="{{ url( $urlSegment ) }}">{{ $app_name }}</a>
                </div>

                {{-- The menu items at the top (collapses down when browser gets small) --}}
                <div class="collapse navbar-left navbar-collapse">
                    @if($menu_items)
                        <ul class="nav navbar-nav">
                            @foreach($menu_items as $url=>$item)
                                @if( $item['top'] )
                                    <li class="{{ Request::is( "$urlSegment/$url*" ) ? 'active' : '' }}">
                                        <a href="{{ url( $urlSegment.'/'.$url ) }}">{{ $item['name'] }}</a>
                                    </li>
                                @endif
                            @endforeach
                            <li><a href="{{ url( $urlSegment.'/logout' ) }}"><strong>Logout</strong></a></li>
                        </ul>
                    @endif
                </div><!-- /.nav-collapse -->

            </div><!-- /.container -->

        </div><!-- /.navbar -->

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

