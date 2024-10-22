@extends('frontend.layouts.inner-pages')

@section('content')
@section('pageTitle', 'Gerir cartões')

        <div class="separator-small"></div>

        <div class="swiper-container swiper-offset">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="img">
                        <img src="{{asset('frontend/images/cards/card-verde.png')}}">
                        <p class="text-center">VISA 1</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img">
                        <img src="{{asset('frontend/images/cards/card-verde.png')}}">
                        <p class="text-center">VISA 2</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img">
                        <img src="{{asset('frontend/images/cards/card-verde.png')}}">
                        <p class="text-center">VISA 3</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img">
                        <img src="{{asset('frontend/images/cards/card-verde.png')}}">
                        <p class="text-center">VISA 4</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img">
                        <img src="{{asset('frontend/images/cards/card-verde.png')}}">
                        <p class="text-center">VISA 5</p>
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
							<i class="icon icon ion-ios-lock" style="background-color: #399953"></i>
						</div>
						<div class="list-label">
							<div class="list-title">Bloquear cartão</div>
							<div class="list-after"><i class="icon ion-ios-arrow-forward"></i></div>
						</div>
					</a>
				</li>
				<li>
					<a href="#" class="list-item">
						<div class="list-media">
							<i class="icon ion-ios-card" style="background-color: #399953"></i>
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
							<i class="icon ion-ios-browsers" style="background-color: #399953"></i>
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
							<i class="icon ion-ios-trash" style="background-color: #399953"></i>
						</div>
						<div class="list-label">
							<div class="list-title">Eliminar cartão</div>
							<div class="list-after"><i class="icon ion-ios-arrow-forward"></i></div>
						</div>
					</a>
				</li>
                <li>
					<a href="#" class="list-item">
						<div class="list-media">
							<i class="icon ion-ios-add" style="background-color: #399953"></i>
						</div>
						<div class="list-label">
							<div class="list-title">Solicitar novo</div>
							<div class="list-after"><i class="icon ion-ios-arrow-forward"></i></div>
						</div>
					</a>
				</li>
                <li>
					<a href="#" class="list-item">
						<div class="list-media">
							<i class="icon ion-ios-more" style="background-color: #399953"></i>
						</div>
						<div class="list-label">
							<div class="list-title">Alterar senha</div>
							<div class="list-after"><i class="icon ion-ios-arrow-forward"></i></div>
						</div>
					</a>
				</li>
                <li>
					<a href="#" class="list-item">
						<div class="list-media">
							<i class="icon ion-ios-help" style="background-color: #399953"></i>
						</div>
						<div class="list-label">
							<div class="list-title">Solicitar Ajuda</div>
							<div class="list-after"><i class="icon ion-ios-arrow-forward"></i></div>
						</div>
					</a>
				</li>
			</ul>
		</div>

        <div class="separator-large"></div>
@endsection
