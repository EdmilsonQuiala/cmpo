@extends('frontend.layouts.main')

@section('content')
@section('pageTitle', 'Resumo')

		<div class="section-title title-large">
			<span class="overline-title">Ola! {{ Auth::user()->name }}</span>
			<h3>Carteira movel de pagamentos online</h3>
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
								<i class="icon ion-ios-checkbox bg-green"></i>
							</div>
							<div class="text">
								<h5>Euro</h5>
                                <p>1£ = 0.89 AOA</p>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="content bg-lightgreen" style="padding: 10px; border-radius: 15px">
							<div class="wrap-icon">
								<i class="icon ion-ios-checkbox bg-green"></i>
							</div>
							<div class="text">
								<h5>Euro</h5>
                                <p>1£ = 0.89 AOA</p>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="content bg-lightgreen" style="padding: 10px; border-radius: 15px">
							<div class="wrap-icon">
								<i class="icon ion-ios-keypad bg-red"></i>
							</div>
							<div class="text">
								<h5>Euro</h5>
                                <p>1£ = 0.89 AOA</p>
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

        <div id="AboutApp" class="modal fade succes-modal">
            <div class="modal-dialog modal-bottom">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="modal-icon-title">
                            <h5>Sobre o App!</h5>
                            <p class="text-small">O Album é uma plataforma digital desenvolvida para conectar artistas e fotógrafos com colecionadores e apreciadores de arte de todo o mundo. Seja você um artista emergente, fotógrafo profissional ou alguém apaixonado por arte, o Album oferece um espaço para compartilhar, comprar e vender obras de forma segura e simples.</p>
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
                        <div class="modal-icon-title">
                            <h5>Termos de uso!</h5>
                            <p class="text-small">(ilustrativo) Nossa missão é promover a arte e a criatividade em escala global, proporcionando oportunidades tanto para quem cria quanto para quem busca adquirir peças exclusivas. Com o Album, você pode transformar seu talento em uma fonte de renda, enquanto colecionadores têm a chance de descobrir obras únicas e inspiradoras.".</p>
                        </div>
                        <div class="button-default">
                            <button class="button" data-dismiss="modal" aria-label="Close">Entendido</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
