
@extends('frontend.layouts.product')

@section('content')
@section('pageTitle', 'Detalhes')

<div class="intro-app">
    <div class="container">
        <div class="intro-content">
            <div class="mask"></div>
            <img src="{{ asset('frontend/images/square1.jpg') }}" alt="image-demo">
            <div class="caption">
                <h4 class="text-white mb-1">Nome do produto</h4>
                <p class="text-white">Vendedor: Nome</p>
            </div>
        </div>
    </div>
</div>

<div class="separator-large"></div>

<div class="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <a href="/product-details">
                    <img src="{{ asset('frontend/images/square1.jpg') }}" alt="image-demo">
                    <div class="img-caption pb-5">
                        <h5 class="mb-1">Nome da arte</h5>
                        <span class="text-small">Categoria</span> -
                        <span class="text-small"><strong>15.000 AOA</strong></span>
                    </div>
                </a>
            </div>
            <div class="col-6">
                <a href="/product-details">
                    <img src="{{ asset('frontend/images/square2.jpg') }}" alt="image-demo">
                    <div class="img-caption pb-5">
                        <h5 class="mb-1">Nome da arte</h5>
                        <span class="text-small">Categoria</span> -
                        <span class="text-small"><strong>15.000 AOA</strong></span>
                    </div>
                </a>
            </div>
            <div class="col-6">
                <a href="/product-details">
                    <img src="{{ asset('frontend/images/square3.jpg') }}" alt="image-demo">
                    <div class="img-caption pb-5">
                        <h5 class="mb-1">Nome da arte</h5>
                        <span class="text-small">Categoria</span> -
                        <span class="text-small"><strong>15.000 AOA</strong></span>
                    </div>
                </a>
            </div>
            <div class="col-6">
                <a href="/product-details">
                    <img src="{{ asset('frontend/images/square4.jpg') }}" alt="image-demo">
                    <div class="img-caption pb-5">
                        <h5 class="mb-1">Nome da arte</h5>
                        <span class="text-small">Categoria</span> -
                        <span class="text-small"><strong>15.000 AOA</strong></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

@section('toolbar')
    <div class="toolbar">
        <div class="container">
            <ul class="toolbar-bottom toolbar-wrap">
                <div class="container">
                    <div class="gallery-action">
                        <div class="row">
                            <div class="col-6">
                                <div class="content">
                                    <div class="dropdown">
                                        <a href="#" id="dropdownMenuButton" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ordenar por</a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Mais barato</a>
                                            <a class="dropdown-item" href="#">Mais Caro</a>
                                            <a class="dropdown-item" href="#">Recentes</a>
                                            <a class="dropdown-item" href="#">Nome</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="content">
                                    <ul class="nav nav-fill nav-tab-icon" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="column-tab" data-toggle="tab" href="#column" role="tab" aria-controls="column" aria-selected="true"><i class="icon ion-ios-keypad"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="fullwidth-tab" data-toggle="tab" href="#fullwidth" role="tab" aria-controls="fullwidth" aria-selected="false"><i class="icon ion-ios-square"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </ul>
        </div>
    </div>
@endsection

<div class="separator-large"></div>

@endsection
