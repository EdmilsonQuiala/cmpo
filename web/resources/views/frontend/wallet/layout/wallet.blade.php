<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="default">
	<meta http-equiv="Content-Security-Policy" content="default-src * 'self' 'unsafe-inline' 'unsafe-eval' data: gap:">

	<link rel="icon" href="{{ asset('frontend/images/afercon/logo/icon.png') }}">
	<title>Afercon Pay</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,500i,700,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('frontend/css/framework7.bundle.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
</head>
<body>

	<div id="app">
		<div class="view view-main view-init ios-edges" data-url="/">
			<div class="page page-home page-with-subnavbar">
				<div class="toolbar tabbar tabbar-labels toolbar-bottom">
					<div class="toolbar-inner">
						<a href="#tab-AddMoney" class="tab-link @if($CurrentPage == 'AddMoney') tab-link-active @endif">
							<i class="fas fa-home"></i>
							<span class="tabbar-label">Home</span>
						</a>
						<a href="#tab-cards" class="tab-link">
							<i class="fa fa-credit-card"></i>
							<span class="tabbar-label">Cartões</span>
						</a>
						<a href="#tab-services" class="tab-link">
							<i class="fas fa-shopping-cart"></i>
							<span class="tabbar-label">Serviços</span>
						</a>
						<a href="#tab-profile" class="tab-link">
							<i class="fas fa-user"></i>
							<span class="tabbar-label">Perfil</span>
						</a>
					</div>
				</div>

                @yield('content')

                @include('msg.system')
                @include('msg.user')
            </div>
		</div>

	</div>

	<script src="{{ asset('frontend/js/framework7.bundle.min.js') }}"></script>
	<script src="{{ asset('frontend/js/routes.js') }}"></script>
	<script src="{{ asset('frontend/js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>
