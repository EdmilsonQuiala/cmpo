@extends('frontend.layouts.product')

@section('content')
@section('pageTitle', 'Checkout')

<div class="separator-large"></div>

<div class="section-title">
    <h6>Encomendas</h6>
</div>

<div class="container">
    <div class="card card-list card-outline">
        <div class="card-body">
            <div class="card-list-item">
                <div class="card-list-media">
                    <img src="{{ asset('frontend/images/square1.jpg') }}" alt="image-demo">
                </div>
                <div class="card-list-title">Nome xxxx</div>
                <div class="card-list-title"><input type="number" placeholder="qtd"></div>
                <div class="card-list-title">15.000 &nbsp;&nbsp; <i class="icon ion-ios-close"></i></div>
            </div>
            <div class="card-list-item">
                <div class="card-list-media">
                    <img src="{{ asset('frontend/images/square1.jpg') }}" alt="image-demo">
                </div>
                <div class="card-list-title">Nome xxxx</div>
                <div class="card-list-title"><input type="number" placeholder="qtd"></div>
                <div class="card-list-title">15.000 &nbsp;&nbsp; <i class="icon ion-ios-close"></i></div>
            </div>
            <div class="card-list-item">
                <div class="card-list-media">
                    <img src="{{ asset('frontend/images/square1.jpg') }}" alt="image-demo">
                </div>
                <div class="card-list-title">Nome xxxx</div>
                <div class="card-list-title"><input type="number" placeholder="qtd"></div>
                <div class="card-list-title">15.000 &nbsp;&nbsp; <i class="icon ion-ios-close"></i></div>
            </div>
            <div class="card-list-item">
                <div class="card-list-media">
                    <img src="{{ asset('frontend/images/square1.jpg') }}" alt="image-demo">
                </div>
                <div class="card-list-title">Nome xxxx</div>
                <div class="card-list-title"><input type="number" placeholder="qtd"></div>
                <div class="card-list-title">15.000 &nbsp;&nbsp; <i class="icon ion-ios-close"></i></div>
            </div>
            <div class="card-list-item">
                <div class="card-list-media">
                    <img src="{{ asset('frontend/images/square1.jpg') }}" alt="image-demo">
                </div>
                <div class="card-list-title">Nome xxxx</div>
                <div class="card-list-title"><input type="number" placeholder="qtd"></div>
                <div class="card-list-title">15.000 &nbsp;&nbsp; <i class="icon ion-ios-close"></i></div>
            </div>
        </div>
    </div>
</div>

<div class="separator-large"></div>

<div class="badges">
    <div class="list-view">
        <ul>
            <li class="list-item">
                <div class="list-media">
                    <i class="icon ion-ios-pricetags"></i>
                </div>
                <div class="list-label">
                    <div class="list-title">Total</div>
                    <div class="list-after"><span class="">150.000 AOA</span></div>
                </div>
            </li>
            <li class="list-item">
                <div class="list-media">
                    <i class="icon ion-ios-pricetags"></i>
                </div>
                <div class="list-label">
                    <div class="list-title">Taxa do aplicativo</div>
                    <div class="list-after"><span class="">1.500. AOA</span></div>
                </div>
            </li>
            <li class="list-item">
                <div class="list-media">
                    <i class="icon ion-ios-pricetags"></i>
                </div>
                <div class="list-label">
                    <div class="list-title">Descontos</div>
                    <div class="list-after"><span class="">0 AOA</span></div>
                </div>
            </li>
            <li class="list-item">
                <div class="list-media">
                    <i class="icon ion-ios-pricetags"></i>
                </div>
                <div class="list-label">
                    <div class="list-title">Total Geral</div>
                    <div class="list-after"><span class=""><strong>200.000 AOA</strong></span></div>
                </div>
            </li>
        </ul>
    </div>
</div>

<div class="separator-large"></div>

<div class="section-title">
    <h6 class="text-center">Forma de pagamento</h6>
</div>

<div class="badges">
    <div class="list-view">
        <ul>
            <li class="list-item">
                <div class="list-label">
                    <div class="list-title"><label for="Transfer">Tranferencia Bancaria</label></div>
                    <div class="list-after"><span class=""><input type="radio" name="PaymentMethod" id="Transfer" value="Transfer"></span></div>
                </div>
            </li>
            <li class="list-item">
                <div class="list-label">
                    <div class="list-title"><label for="MulticaixaExpress">Multicaixa Express</label></div>
                    <div class="list-after"><span class=""><input type="radio" name="PaymentMethod" id="MulticaixaExpress" value="MulticaixaExpress"></span></div>
                </div>
            </li>
            <li class="list-item">
                <div class="list-label">
                    <div class="list-title"><label for="VisaMasterCard">VISA / MasterCard</label></div>
                    <div class="list-after"><span class=""><input type="radio" name="PaymentMethod" id="VisaMasterCard" value="VisaMasterCard"></span></div>
                </div>
            </li>
            <li class="list-item">
                <div class="list-label">
                    <div class="list-title"><label for="OnDelivery">Na Entrega</label></div>
                    <div class="list-after"><span class=""><strong><input type="radio" name="PaymentMethod" id="OnDelivery" value="OnDelivery"></strong></span></div>
                </div>
            </li>
        </ul>
    </div>
</div>

@section('toolbar')
    <div class="toolbar">
        <div class="container">
            <ul class="toolbar-bottom toolbar-wrap" style="margin-bottom: 19px">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <a href="/" class="button button-fill"><i class="icon-left icon ion-ios-cash"></i> &nbsp;&nbsp; Finalizar</a>
                        </div>
                    </div>
                </div>
            </ul>
        </div>
    </div>
@endsection

<div class="separator-large"></div>

@endsection
