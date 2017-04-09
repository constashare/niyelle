<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags always come first -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	
<!--	{{--Favicon icons--}}-->
<!--	<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">-->
<!--	<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">-->
<!--	<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">-->
<!--	<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">-->
<!--	<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">-->
<!--	<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">-->
<!--	<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">-->
<!--	<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">-->
<!--	<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">-->
<!--	<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">-->
<!--	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">-->
<!--	<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">-->
<!--	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">-->
<!--	<link rel="manifest" href="/manifest.json">-->
<!--	{{--<meta name="msapplication-TileColor" content="#ffffff">--}}-->
<!--	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">-->
<!--	{{--<meta name="theme-color" content="#ffffff">--}}-->
<!--	{{--Favicon Ends--}}-->

	<title>@yield('title', app_name())</title>

	<!-- Bootstrap core CSS -->
	<link href="{{ URL::asset('css/normalize.css') }}" rel="stylesheet">
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
	
	<!-- Bootstrap core CSS -->
	<link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet">
	
	<!-- Material Design Bootstrap -->
	<link href="{{ URL::asset('css/mdb.css') }}" rel="stylesheet">
	
	{{--Hover.css--}}
	<link href="{{ URL::asset('css/hover.css') }}" rel="stylesheet">

    {{--custom css files--}}
	@yield('css_file')

	{{--Constashare CSS--}}
	<link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
	
	<!-- Scripts -->
    <script src="{{ URL::asset('js/jquery-3.1.1.min.js') }}"></script>
	<script>
        window.Laravel = <?php echo json_encode([
			'csrfToken' => csrf_token(),
		]); ?>
	</script>

    <script src="{{URL::asset('js/plupload/plupload.full.min.js')}}"></script>
    <script src="{{URL::asset('js/plupload/plupload.full.min.js')}}"></script>
    <script src="{{URL::asset('js/plupload/jquery.ui.plupload/jquery.ui.plupload.js')}}"></script>

	<style>
		.bg-skin-lp {
			background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/Nature/full%20page/img%20%2823%29.jpg');
			background-size: cover;
			background-repeat: no-repeat;
			background-position: center center;
			background-attachment: fixed;
		}
	</style>

</head>

<body class="hidden-sn constashare-skin">
<div id="app">
	@include('includes.partials.logged-in-as')
	@include('frontend.includes.nav_app')
	<main>
		<div class="container ">
			@include('includes.partials.messages')
			<br>
			
			@yield('content')
			<br>
		</div>
	</main>

</div>


<!-- SCRIPTS -->

<!-- JQuery -->
<script src="{{ URL::asset('js/tether.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap.js') }}"></script>


<script src="{{ URL::asset('js/mdb.min.js') }}"></script>


<script>
    // SideNav init
    $(".button-collapse").sideNav();
    //            /.Input Select Init
    $('.mdb-select').material_select();
    // Custom scrollbar init
    var el = document.querySelector('.custom-scrollbar');
    Ps.initialize(el);
</script>

@yield('scripts')

</body>
</html>