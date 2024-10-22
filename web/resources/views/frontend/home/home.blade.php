@extends('frontend.layouts.main')

@section('content')
@section('pageTitle', 'Resumo')

		<div class="section-title title-large">
			<span class="overline-title">Ola! Sr. {{ explode(' ', Auth::user()->name)[0] }}</span>
			<h3>Bem vindo a sua, carteira movel de pagamentos online</h3>
		</div>

        <div class="intro-app">
			<div class="container">
				<div class="intro-content">
					<div class="mask"></div>
					<img src="{{ asset('frontend/images/intro.jpg') }}" alt="image-demo">
					<div class="caption">
						<h4 class="text-white mb-1">Saldo atual</h4>
						<p class="text-white">150.000,00 AOA</p>
					</div>
				</div>
			</div>
		</div>

        <div class="separator-small"></div>

		<div class="feature-list">
			<div class="swiper-container swiper-offset">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
                        <div class="content bg-lightgreen" style="padding: 10px; border-radius: 15px">
							<div class="wrap-icon">
								<i class="icon ion-ios-pulse" style="background-color: #399953"></i>
							</div>
							<div class="text">
								<h5>Euro</h5>
                                <p>1 EUR = 1089 AOA</p>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="content bg-lightgreen" style="padding: 10px; border-radius: 15px">
							<div class="wrap-icon">
								<i class="icon ion-ios-pulse"  style="background-color: #399953"></i>
							</div>
							<div class="text">
								<h5>Dolar</h5>
                                <p>1 USD = 989 AOA</p>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="content bg-lightgreen" style="padding: 10px; border-radius: 15px">
							<div class="wrap-icon">
								<i class="icon ion-ios-pulse"  style="background-color: #399953"></i>
							</div>
							<div class="text">
								<h5>Real</h5>
                                <p>1 BRL = 500 AOA</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

        <div class="separator-large"></div>

        <div class="section-title">
            <h5 class="float-left">Transições</h5>
            <p class="float-right">Ver todas</p>
        </div>

        <div class="list-view">
            <ul>
                <li class="list-item"></li>
                <li class="list-item">
                    <div class="list-label">
                        <div class="list-title">Pagamento</div>
                        <div class="list-after">15, Jan 2024</div>
                        <div class="list-after">12.000 AOA</div>
                    </div>
                </li>
                <li class="list-item">
                    <div class="list-label">
                        <div class="list-title">Pagamento</div>
                        <div class="list-after">15, Jan 2024</div>
                        <div class="list-after">12.000 AOA</div>
                    </div>
                </li>
                <li class="list-item">
                    <div class="list-label">
                        <div class="list-title">Pagamento</div>
                        <div class="list-after">15, Jan 2024</div>
                        <div class="list-after">12.000 AOA</div>
                    </div>
                </li>
                <li class="list-item">
                    <div class="list-label">
                        <div class="list-title">Pagamento</div>
                        <div class="list-after">15, Jan 2024</div>
                        <div class="list-after">12.000 AOA</div>
                    </div>
                </li>
                <li class="list-item">
                    <div class="list-label">
                        <div class="list-title">Pagamento</div>
                        <div class="list-after">15, Jan 2024</div>
                        <div class="list-after">12.000 AOA</div>
                    </div>
                </li>
                <li class="list-item">
                    <div class="list-label">
                        <div class="list-title">Pagamento</div>
                        <div class="list-after">15, Jan 2024</div>
                        <div class="list-after">12.000 AOA</div>
                    </div>
                </li>
            </ul>
        </div>

		<div class="separator-large"></div>

        <div>
            <canvas id="myChart"></canvas>
        </div>

        <div class="separator-large"></div>
@endsection
