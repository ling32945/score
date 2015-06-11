<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="examination results resarch">
	<title>Examination Results Inquire</title>

	<link href="/css/score.css" rel="stylesheet">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="icon" href="/favicon.ico">
</head>
<body>
    <div class="navbar navbar-inverse ">
        <div class="container">
            <div id="navbar" class="navbar-header">
                <ul class="nav navbar-nav">
                    <li><a class="navbar-brand" href="{{ url('/') }}">Examinaion Results Inquiry</a></li>
                    <li class="{{ Request::is('/') ? 'active' : ''}}" ><a href="{{ url('/') }}">Home</a></li>
                    <li class="{{ Request::is('student*') ? 'active' : ''}}" ><a href="{{ url('/student') }}">Student</a></li>
                    <li class="{{ Request::is('course*') ? 'active' : ''}}" ><a href="{{ url('/course') }}">Course</a></li>
                    <li class="{{ Request::is('score*') ? 'active' : ''}}" ><a href="{{ url('/score') }}">Score</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container theme-showcase" role="main">
        @yield('content')
    </div>
    <div class="container">
        <hr>
        <footer>
            <p>&copy; Score {{ date('Y') }}</p>
        </footer>
    </div><!--/.container-->
<script src="/js/jquery-2.1.4.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
</body>
</html>

