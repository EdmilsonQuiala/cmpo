@extends('frontend.security.layout.main')
@section('content')
    <div class="tabs">

        @include('msg.system')
        @include('msg.user')
        @include('frontend.security.pages.sign-in')
        @include('frontend.security.pages.sign-up')

    </div>
@endsection
