@extends('frontend.layouts.access')

@section('title', 'Recuperar Senha')

@section('content')
    <div class="container d-flex justify-content-center">
        <img src="{{ asset('frontend/images/logo/album-06.png') }}" alt="" class="img-fluid" width="60%">
    </div>
    <div class="separator-medium"></div>
    <form class="form-fill" method="POST" action="{{ route('sendResetLink') }}" onsubmit="handleFormSubmit(event)">
        @csrf
        <div class="form-wrapper">
            <div class="input-wrap">
                <div class="title">Seu e-mail</div>
                <input type="email" placeholder="Ex. jorge@gmail.com" name="email" required>
            </div>
        </div>
        <div class="button-default">
            <button class="button" id="recoverButton">Enviar Link</button>
        </div>
    </form>

    @include('msg.system')
    @include('msg.user')

    <div class="fakeLoader" style="display: none;"></div>

    <script>
        function handleFormSubmit(event) {
            document.getElementById('recoverButton').disabled = true;
            document.querySelector('.fakeLoader').style.display = 'block';
        }
    </script>
@endsection
