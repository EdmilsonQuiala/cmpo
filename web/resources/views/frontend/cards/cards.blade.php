@extends('frontend.layouts.inner-pages')

@section('content')
@section('pageTitle', 'Gerir cartões')

        <div class="separator-small"></div>

        <div class="swiper-container swiper-offset">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="img">
                        <img src="{{asset('frontend/images/cards/card-verde.png')}}" alt="image-demo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img">
                        <img src="{{asset('frontend/images/cards/card-verde.png')}}" alt="image-demo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img">
                        <img src="{{asset('frontend/images/cards/card-verde.png')}}" alt="image-demo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img">
                        <img src="{{asset('frontend/images/cards/card-verde.png')}}" alt="image-demo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img">
                        <img src="{{asset('frontend/images/cards/card-verde.png')}}" alt="image-demo">
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-container swiper-style">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="margin-top: -100px; padding: 0">
                    <div class="content shadow-sm">
                        <div class="icon"><i class="icon ion-ios-star color-green"></i></div>
                        <div class="text">
                            <h5>Carregar</h5>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" style="margin-top: -100px; padding: 0">
                    <div class="content shadow-sm">
                        <div class="icon"><i class="icon ion-ios-star color-green"></i></div>
                        <div class="text">
                            <h5>Bloquear</h5>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" style="margin-top: -100px; padding: 0">
                    <div class="content shadow-sm">
                        <div class="icon"><i class="icon ion-ios-star color-green"></i></div>
                        <div class="text">
                            <h5>+ Cartão</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="separator-small"></div>

        <div class="list-view list-separate-two list-colored">
			<ul>
				<li>
					<a href="#" class="list-item">
						<div class="list-media">
							<i class="icon ion-ios-home bg-green"></i>
						</div>
						<div class="list-label">
							<div class="list-title">Métodos de pagamento</div>
							<div class="list-after"><i class="icon ion-ios-arrow-forward"></i></div>
						</div>
					</a>
				</li>
				<li>
					<a href="#" class="list-item">
						<div class="list-media">
							<i class="icon ion-ios-star bg-green"></i>
						</div>
						<div class="list-label">
							<div class="list-title">Alterar identificação</div>
							<div class="list-after"><i class="icon ion-ios-arrow-forward"></i></div>
						</div>
					</a>
				</li>
				<li>
					<a href="#" class="list-item">
						<div class="list-media">
							<i class="icon ion-ios-browsers bg-green"></i>
						</div>
						<div class="list-label">
							<div class="list-title">Definir limites</div>
							<div class="list-after"><i class="icon ion-ios-arrow-forward"></i></div>
						</div>
					</a>
				</li>
				<li>
					<a href="#" class="list-item">
						<div class="list-media">
							<i class="icon ion-ios-apps bg-green"></i>
						</div>
						<div class="list-label">
							<div class="list-title">Solicitar ajuda</div>
							<div class="list-after"><i class="icon ion-ios-arrow-forward"></i></div>
						</div>
					</a>
				</li>
			</ul>
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
