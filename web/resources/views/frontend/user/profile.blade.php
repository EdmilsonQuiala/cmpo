
@extends('frontend.layouts.inner-pages')

@section('content')
@section('pageTitle', 'Perfil')

<div class="separator-large"></div>

<div class="profile">
    <div class="container">
        <div class="row">
            <div class="col-4 align-self-center">
                <div class="content statistic text-right">
                    <h5></h5>
                    <span class="text-small"></span>
                </div>
            </div>
            <div class="col-4">
                <div class="header-profile">
                    <div class="container">
                        <img src="{{ asset('frontend/images/logo/icon.png') }}" alt="image-demo">
                    </div>
                </div>
            </div>
            <div class="col-4 align-self-center">
                <div class="content statistic text-left">
                    <h5></h5>
                    <span class="text-small"></span>
                </div>
            </div>
        </div>

        <div class="profile-title text-center">
            <h4>Nome do utilizador</h4>
            <span class="text-small">Telefone</span>
        </div>

        <div class="profile-button">
            <div class="row">
                <div class="col-12">
                    <a href="#" class="button">Fazer Compras</a>
                </div>
            </div>
        </div>

        <!-- separator -->
        <div class="separator-large"></div>
        <!-- end separator -->

        <ul class="nav nav-fill nav-default" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="ports-tab" data-toggle="tab" href="#ports" role="tab" aria-controls="ports" aria-selected="true">Definicoes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="collection-tab" data-toggle="tab" href="#collection" role="tab" aria-controls="collection" aria-selected="false">Editar Perfil</a>
            </li>
        </ul>

        <!-- separator -->
        <div class="separator-large"></div>
        <!-- end separator -->

        <div class="tab-content">
            <div class="tab-pane show active" id="ports" role="tabpanel" aria-labelledby="ports-tab">
                <div class="notification-setting">
                    <div class="list-view">
                        <ul>
                            <li class="list-item">
                                <div class="list-label">
                                    <div class="list-title">Atualizacao automatica</div>
                                    <div class="list-after">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                                            <label class="custom-control-label" for="customSwitch1"></label>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-item">
                                <div class="list-label">
                                    <div class="list-title">Notificacoes por e-mail</div>
                                    <div class="list-after">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="customSwitch2">
                                            <label class="custom-control-label" for="customSwitch2"></label>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-item">
                                <div class="list-label">
                                    <div class="list-title">Notificacao por SMS</div>
                                    <div class="list-after">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="customSwitch3" checked>
                                            <label class="custom-control-label" for="customSwitch3"></label>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-item">
                                <div class="list-label">
                                    <div class="list-title">Notificacao por Push</div>
                                    <div class="list-after">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="customSwitch4">
                                            <label class="custom-control-label" for="customSwitch4"></label>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="collection" role="tabpanel" aria-labelledby="collection-tab">
                <div class="setting-form">
                    <form class="form-fill form-horizontal">
                        <div class="form-wrapper">
                            <div class="input-wrap row">
                                <label for="inputName" class="col-3 col-form-label">Seu nome</label>
                                <div class="col-9">
                                    <input id="inputName" type="text">
                                </div>
                            </div>
                            <div class="input-wrap row">
                                <label for="inputName" class="col-3 col-form-label">Seu e-mail</label>
                                <div class="col-9">
                                    <input id="inputName" type="email">
                                </div>
                            </div>
                            <div class="input-wrap row">
                                <label for="inputName" class="col-3 col-form-label">Endereco</label>
                                <div class="col-9">
                                    <input id="inputName" type="text">
                                </div>
                            </div>
                            <div class="input-wrap row">
                                <label for="inputName" class="col-3 col-form-label">Telefone</label>
                                <div class="col-9">
                                    <input id="inputName" type="text">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
