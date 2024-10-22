<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="icon" href="{{ asset('frontend/images/favicon.png') }}">
	<title>{{ config('app.name', 'cmpo') }}</title>

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
			<a href="#menu" class="link menu-link"><i class="icon ion-ios-menu"></i></a>
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

    <div id="AboutApp" class="modal fade succes-modal">
        <div class="modal-dialog modal-bottom">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-icon-title">
                        <h5>Sobre o App!</h5>
                        <p class="text-small">Com a CMPO, faça pagamentos, transfira dinheiro e gerencie suas finanças de forma simples e segura, tudo em um só lugar.</p>
                    </div>
                    <div class="button-default">
                        <button class="button" data-dismiss="modal" aria-label="Close">Entendido</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="AppTerms" class="modal fade succes-modal">
        <div class="modal-dialog modal-bottom">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-icon-title text-left">
                        <h5>Termos de uso!</h5>
                        <p class="text-small">Ao usar o aplicativo CMPO, você concorda com todos os termos aqui descritos. Leia com atenção antes de utilizar nossos serviços. <br></p>
                        <ul>
                            <li><strong>Uso do Aplicativo:</strong> Você deve utilizar o CMPO de acordo com as leis aplicáveis. A CMPO reserva-se o direito de suspender ou encerrar contas que violem nossos termos ou apresentem atividades suspeitas.<br></li>
                            <li><strong>Segurança da Conta:</strong> A segurança da sua conta é nossa prioridade. No entanto, você é responsável por manter suas credenciais de acesso seguras. Qualquer atividade realizada em sua conta é de sua responsabilidade.<br></li>
                            <li><strong>Limitações de Responsabilidade:</strong> A CMPO não será responsável por perdas financeiras decorrentes de uso indevido, atrasos ou interrupções de serviço, salvo em casos de negligência intencional de nossa parte.<br></li>
                            <li><strong>Alterações nos Termos:</strong> Podemos atualizar estes Termos de Uso a qualquer momento. É sua responsabilidade verificar periodicamente por atualizações.<br></li>
                        </ul>
                    </div>
                    <div class="button-default">
                        <button class="button" data-dismiss="modal" aria-label="Close">Entendido</button>
                    </div>
                </div>
            </div>
        </div>
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
                        <i class="icon ion-ios-help-outline"></i>
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

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {

            type: 'line',
            data: {
                labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio' ],
                datasets: [{
                    label: 'Últimos 5 meses',
                    data: [65, 59, 80, 81, 56, 55, 40],
                    fill: false,
                    borderColor: 'rgb(75, 192, 192)',
                    tension: 0.1
                }]
            }
        });
      </script>

</body>
</html>

