<!DOCTYPE html>
<html>
<head>
	<title>
		  @isset($title)
            {{ $title }} | 
	      @endisset
	      {{ config('app.name') }}
	</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	@yield('content')
</body>
</html>