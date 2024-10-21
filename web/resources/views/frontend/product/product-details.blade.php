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

<div id="accordionParent2" class="accordion accordion-inset">
    <div class="accordion-item">
        <div class="accordion-title collapsed" data-toggle="collapse" data-target="#accordionTwo1">Ler descricao &nbsp;&nbsp; <i class="icon ion-ios-arrow-down"></i>
            <div class="accordion-after">
                <i class="icon ion-ios-arrow-up"></i>
            </div>
        </div>
        <div id="accordionTwo1" class="accordion-body collapse" data-parent="#accordionParent2">
            <div class="accordion-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil amet, sunt obcaecati in! Ducimus consectetur fugiat iure eum?</p>
            </div>
        </div>
    </div>
</div>

<div class="separator-large"></div>

<div class="section-title">
    <h6>Detalhes</h6>
</div>

<div class="list-view">
    <ul>
        <li class="list-item">
            <div class="list-label">
                <div class="list-title">Espessura</div>
                <div class="list-after">12 cm</div>
            </div>
        </li>
        <li class="list-item">
            <div class="list-label">
                <div class="list-title">Largura</div>
                <div class="list-after">12 cm</div>
            </div>
        </li>
        <li class="list-item">
            <div class="list-label">
                <div class="list-title">Altura</div>
                <div class="list-after">12 cm</div>
            </div>
        </li>
        <li class="list-item">
            <div class="list-label">
                <div class="list-title">Peso</div>
                <div class="list-after">12 Kg</div>
            </div>
        </li>
    </ul>
</div>

<div class="section-title">
    <h6 class="text-center">Imagem comppleta</h6>
</div>

<div class="tab-content">
    <div class="tab-pane fade show active" id="column" role="tabpanel" aria-labelledby="column-tab">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img src="{{ asset('frontend/images/square1.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

@section('toolbar')
    <div class="toolbar">
        <div class="container">
            <ul class="toolbar-bottom toolbar-wrap" style="margin-bottom: 19px">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <button class="button button-fill">15.000 AOA</button>
                        </div>
                        <div class="col-6">
                            {{-- <button class="button button-outline link link-back"><i class="icon ion-ios-arrow-back"></i> &nbsp;&nbsp; Cancelar</button> --}}
                            <a class="button button-outline" href="/checkout"><i class="icon-left icon ion-ios-cash"></i> &nbsp;&nbsp; Comprar</a>
                        </div>
                    </div>
                </div>
            </ul>
        </div>
    </div>
@endsection

<div class="separator-large"></div>

@endsection
