@extends('frontend.layouts.access')

@section('title', 'Registe-se')

@section('content')
    <div class="container d-flex justify-content-center">
        <img src="{{ asset('frontend/images/cards/cmpo-logo-icon.png') }}" alt="" class="img-fluid" width="60%">
    </div>
    <div class="separator-medium"></div>
    <form class="form-fill" action="{{ route('registerUser') }}" method="POST" onsubmit="handleFormSubmit(event)">
        @csrf
        <div class="form-wrapper">
            <div class="input-wrap">
                <div class="title">Nome completo</div>
                <input type="text" placeholder="Ex. Jorge Antunes" name="name" value="{{ old('name') }}" required>
            </div>
            <div class="input-wrap">
                <div class="title">Seu telefone</div>
                <input type="number" placeholder="Ex. +244 999 999 999" name="phone" value="{{ old('phone') }}" required>
            </div>
            <div class="input-wrap">
                <div class="title">Seu e-mail</div>
                <input type="email" placeholder="Ex. jorge@gmail.com" name="email" value="{{ old('email') }}" required>
            </div>
            <div class="input-wrap">
                <div class="title">Sua senha</div>
                <input type="password" placeholder="******" name="password" required>
            </div>
            <div class="input-wrap">
                <div class="title">Confirmar senha</div>
                <input type="password" placeholder="******" name="password_confirmation" required>
            </div>
        </div>
        <div class="button-default">
            <button type="submit" class="button" id="registerButton">Registar</button>
        </div>
    </form>

    <div class="separator-medium"></div>

    <div class="link-sign-up text-center text-small">
        <p>Já tem uma conta?<a href="{{ route('login') }}" class="color-theme ml-2">Acesse aqui!</a></p>
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
            document.getElementById('registerButton').disabled = true;
            document.querySelector('.fakeLoader').style.display = 'block';
            event.target.submit();
        }
    </script>
@endsection
