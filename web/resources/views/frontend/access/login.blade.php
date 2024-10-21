@extends('frontend.layouts.access')

@section('title', 'Acessar Conta')

@section('content')
    <div class="container d-flex justify-content-center">
        <img src="{{ asset('frontend/images/cards/cmpo-logo-icon.png') }}" alt="" class="img-fluid" width="60%">
    </div>
    <div class="separator-medium"></div>
    <form class="form-fill" method="POST" action="{{ route('authenticate') }}" onsubmit="handleFormSubmit(event)">
        @csrf
        <div class="form-wrapper">
            <div class="input-wrap">
                <div class="title">Seu e-mail</div>
                <input type="email" placeholder="Ex. jorge@gmail.com" name="email" required>
            </div>
            <div class="input-wrap">
                <div class="title">Sua senha</div>
                <input type="password" placeholder="******" name="password" required>
            </div>
        </div>
        <div class="button-default">
            <button class="button" id="loginButton">Acessar conta</button>
        </div>
    </form>

    <div class="separator-medium"></div>

    <div class="link-sign-up text-center text-small">
        <p>Ainda não tem conta?<a href="/register" class="color-theme ml-2">Crie uma!</a></p>
        <div class="separator-medium"></div>
        <p>Esqueceu a senha?<a href="{{ route('recoverPassword') }}" class="color-theme ml-2">Recupere!</a></p>
    </div>

    <div class="separator-large"></div>

    <div class="sign-with">
        <ul>
            <li>
                <a href="#"><i class="icon ion-logo-facebook mr-2"></i>Facebook</a>
            </li>
            <li>
                <a href="#"><i class="icon ion-logo-google mr-2"></i>Google</a>
            </li>
        </ul>
    </div>

    <div class="fakeLoader" style="display: none;"></div>

    <script>
        function handleFormSubmit(event) {
            document.getElementById('loginButton').disabled = true;
            document.querySelector('.fakeLoader').style.display = 'block';
        }
    </script>

@endsection
