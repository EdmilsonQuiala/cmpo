
@extends('frontend.layouts.inner-pages')

@section('content')
@section('pageTitle', 'Sobre a app')

		<div class="separator-large"></div>

		<div class="about-us">
			<div class="header-about">
				<div class="container">
					<img src="{{ asset('frontend/images/logo/icon.png') }}" alt="album logo">
					<div class="about-title">
						<h4>album</h4>
						<span class="text-small">Marketplace - Versao 1.1.0</span>
					</div>
					<p class="text-left">O Album é uma plataforma digital desenvolvida para conectar artistas e fotógrafos com colecionadores e apreciadores de arte de todo o mundo. Seja você um artista emergente, fotógrafo profissional ou alguém apaixonado por arte, o Album oferece um espaço para compartilhar, comprar e vender obras de forma segura e simples. Nossa missão é promover a arte e a criatividade em escala global, proporcionando oportunidades tanto para quem cria quanto para quem busca adquirir peças exclusivas. Com o Album, você pode transformar seu talento em uma fonte de renda, enquanto colecionadores têm a chance de descobrir obras únicas e inspiradoras..</p>
					<div class="separator-medium"></div>

					<div class="social-media-icon socmed-for-about shadow-sm">
						<ul>
							<li><a href="#"><i class="icon ion-logo-facebook color-facebook"></i></a></li>
							<li><a href="#"><i class="icon ion-logo-instagram color-instagram"></i></a></li>
							<li><a href="#"><i class="icon ion-logo-whatsapp color-whatsapp"></i></a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="separator-large"></div>

			<div class="counter">
				<div class="container">
					<div class="row">
						<div class="col-6">
							<div class="content bg-blue text-center">
								<h3 class="color-white">60</h3>
								<h5 class="color-white">Clientes</h5>
							</div>
						</div>
						<div class="col-6">
							<div class="content bg-red text-center">
								<h3 class="color-white">28</h3>
								<h5 class="color-white">Vendedores</h5>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-6">
							<div class="content bg-yellow text-center">
								<h3 class="color-white">28</h3>
								<h5 class="color-white">Produtos</h5>
							</div>
						</div>
						<div class="col-6">
							<div class="content bg-purple text-center">
								<h3 class="color-white">109</h3>
								<h5 class="color-white">Transacoes</h5>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="separator-large"></div>
		</div>
@endsection
