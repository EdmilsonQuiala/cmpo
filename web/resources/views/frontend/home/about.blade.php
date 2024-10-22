
@extends('frontend.layouts.inner-pages')

@section('content')
@section('pageTitle', 'Sobre a app')

		<div class="separator-large"></div>

		<div class="about-us">
			<div class="header-about">
				<div class="container">
					<img src="{{ asset('frontend/images/cards/cmpo-logo-icon.png') }}" alt="album logo">
					<div class="about-title">
						<h4>CMPO</h4>
						<span class="text-small">Versao 1.1.0</span>
					</div>
					<p class="text-left">A CMPO é uma carteira digital completa que facilita a vida financeira. Pague contas, envie e receba dinheiro instantaneamente, faça compras online e muito mais, tudo com a máxima segurança e simplicidade.</p>
					<div class="separator-medium"></div>
				</div>
			</div>

			<div class="separator-large"></div>

			<div class="counter">
				<div class="container">
					<div class="row">
						<div class="col-6">
							<div class="content bg-blue text-center">
								<h3 class="color-white">60</h3>
								<h5 class="color-white">Moedas</h5>
							</div>
						</div>
						<div class="col-6">
							<div class="content bg-red text-center">
								<h3 class="color-white">28</h3>
								<h5 class="color-white">Cartoes</h5>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-6">
							<div class="content bg-yellow text-center">
								<h3 class="color-white">228</h3>
								<h5 class="color-white">Transacoes</h5>
							</div>
						</div>
						<div class="col-6">
							<div class="content bg-purple text-center">
								<h3 class="color-white">109</h3>
								<h5 class="color-white">Utilizadores</h5>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="separator-large"></div>
		</div>
@endsection
