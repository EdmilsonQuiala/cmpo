<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="icon" href="{{ asset('frontend/images/favicon.png') }}">
	<title>{{ config('app.name', 'album') }}</title>

	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/css/ionicons.min.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/css/fakeLoader.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
</head>
<body>

	<div class="navbar navbar-home">
		<div class="left">
			<a href="" class="link link-back"><i class="icon ion-ios-arrow-back"></i></a>
		</div>
        <div class="title">
			@yield('pageTitle')
		</div>
        <div class="right">
            <a href="{{ route('profile') }}" class="link"><i class="icon ion-ios-person"></i></a>
		</div>
	</div>

	<div class="side-overlay"></div>
	<div id="menu" class="panel sidebar" role="navigation">

        <div class="separator-large"></div>

		<div class="list-view list-separate-two list-colored">
			<ul>
				<li>
					<a href="#" class="list-item" data-toggle="modal" data-target="#AboutApp">
						<div class="list-media">
							<i class="icon ion-ios-information-circle bg-lime"></i>
						</div>
						<div class="list-label">
							<div class="list-title">Sobre o app</div>
							<div class="list-after"><i class="icon ion-ios-arrow-forward"></i></div>
						</div>
					</a>
				</li>
				<li>
					<a href="#" class="list-item" data-toggle="modal" data-target="#AppTerms">
						<div class="list-media">
							<i class="icon ion-ios-lock bg-blue"></i>
						</div>
						<div class="list-label">
							<div class="list-title">Termos de uso</div>
							<div class="list-after"><i class="icon ion-ios-arrow-forward"></i></div>
						</div>
					</a>
				</li>
				<li>
					<a href="/logout" class="list-item">
						<div class="list-media">
							<i class="icon ion-ios-power bg-red"></i>
						</div>
						<div class="list-label">
							<div class="list-title">Logout</div>
							<div class="list-after"><i class="icon ion-ios-arrow-forward"></i></div>
						</div>
					</a>
				</li>
			</ul>
		</div>

		<div class="separator-large"></div>

	</div>

	<div class="page-wrapper">

        @yield('content')

        @include('msg.system')
        @include('msg.user')
	</div>

	<div class="toolbar">
        <div class="container">
            <ul class="toolbar-bottom toolbar-wrap">
                <li class="toolbar-item">
                    <a href="{{ route('home') }}" class="toolbar-link {{ Route::is('home') ? 'toolbar-link-active' : '' }}">
                        <i class="icon ion-ios-home"></i>
                    </a>
                </li>
                <li class="toolbar-item">
                    <a href="{{ route('cards') }}" class="toolbar-link {{ Route::is('cards') ? 'toolbar-link-active' : '' }}">
                        <i class="icon ion-ios-apps"></i>
                    </a>
                </li>
                <li class="toolbar-item">
                    <a href="{{ route('about') }}" class="toolbar-link {{ Route::is('about') ? 'toolbar-link-active' : '' }}">
                        <i class="icon ion-ios-help"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>

	<script src="{{ asset('frontend/js/jquery-3.4.1.min.js') }}"></script>
	<script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('frontend/js/fakeLoader.js') }}"></script>
	<script src="{{ asset('frontend/js/swiper.min.js') }}"></script>
	<script src="{{ asset('frontend/js/jquery.big-slide.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('frontend/js/main.js') }}"></script>
    <script>
		// gallery magnific popup
	    $('.gallery').each(function() { // the containers for all your galleries
	    	$(this).magnificPopup({
	            delegate: '.gallery-popup', // the selector for portfolio item
	            type: 'image',
	            gallery: {
	            	enabled: true
	            }
	        });
	    });
	</script>

</body>
</html>

