<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>@yield('title')</title>

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Desa Peresak">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

        {{-- Style --}}
        @stack('prepend-style')
        @include('includes.style')
        @stack('addon-style')

	</head>
	<body>
		<div class="body">

			{{-- Navigation --}}
            @include('includes.navbar')


            {{-- Page Content --}}
            @yield('content')


			{{-- Footer --}}
            @include('includes.footer')

		</div>

        <!-- Bootstrap core JavaScript -->
        @stack('prepend-script')
        @include('includes.script')
        @stack('addon-script')

	</body>
</html>
