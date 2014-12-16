<html>
	<head>
		<title>{{$title}}</title>
		
		{{ HTML::style('css/styles.css') }}
		</head>
	<body>
		<div class="wrapper">
			@if(Session::has('message'))
				<h2 class="success_message">{{ Session::get('message') }}</h2>
			@endif
			@if(Session::has('error_message'))
			<h2 class="error_message">{{ Session::get('error_message') }}</h2>
			@endif
			
			<div align="center">@yield('content')</div>
		</div>
	</body>
</html>