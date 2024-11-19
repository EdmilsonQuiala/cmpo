@extends('frontend.home.layout.main')
@section('content')
    <div class="tabs">
        @include('frontend.home.pages.home')
        @include('frontend.home.pages.cards')
        @include('frontend.home.pages.services')
        @include('frontend.home.pages.profile')
        @include('frontend.home.pages.notifications')
    </div>
@endsection
