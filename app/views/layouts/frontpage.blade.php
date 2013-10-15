<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
	<script src="{{URL::to('assets')}}/js/jquery-1.10.2.min.js"></script>
	<script src="{{URL::to('assets')}}/js/bootstrap.min.js"></script>
        <link href="{{URL::to('assets')}}/css/bootstrap.min.css" rel="stylesheet">
        <link href="{{URL::to('assets')}}/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link href="{{URL::to('assets')}}/css/font-awesome.min.css" rel="stylesheet">		

		
        <style>
            table form { margin-bottom: 0; }
            form ul { margin-left: 0; list-style: none; }
            .error { color: red; font-style: italic; }
            body { padding-top: 20px; }
        </style>
    </head>

    <body>

        <div class="container">
			@include('layouts.menu')
		
            @if (Session::has('message'))
                <div class="flash alert">
                    <p>{{ Session::get('message') }}</p>
                </div>
            @endif

            @yield('main')
        </div>

    </body>

</html>
