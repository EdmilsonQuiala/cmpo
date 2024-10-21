@extends('frontend.layouts.access')

@section('title', 'Verificação de E-mail')

@section('content')
    <div class="container d-flex justify-content-center">
        <img src="{{ asset('frontend/images/logo/album-06.png') }}" alt="" class="img-fluid" width="60%">
    </div>
    <div class="separator-medium"></div>
    <div class="alert alert-warning text-center">
        <p>Verifique seu e-mail para ativar a conta. <br> Não recebeu o e-mail? <form method="POST" action="{{ route('verification.resend') }}" style="display:inline;">
            @csrf
            <button type="submit" class="btn btn-link">Reenviar e-mail</button>
        </form></p>
    </div>
@endsection
