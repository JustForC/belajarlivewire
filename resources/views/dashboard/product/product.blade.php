@extends('dashboard.component.template')

@section('title', 'Product')

@section('content')
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <div id="main-wrapper">
        @include('dashboard.component.navHeader')
        @include('dashboard.component.header')
        @include('dashboard.component.sidebar')
        <livewire:product></livewire:product>
        @include('dashboard.component.footer')
    </div>
    @include('dashboard.product.javascript')
@endsection

