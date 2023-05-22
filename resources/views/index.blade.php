@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="assets/css/grid_inicio.css">
@endsection

@section('content')

    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                @include('layouts.navbars.guest.navbar')
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex align-items-center" style="height: 33vh;">
                <h1 class="present">@lang('auth.descripcionHome')</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center" style="height: 33vh;">
                <h1 class="title text-center">@lang('auth.titulo')</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 d-flex align-items-center justify-content-end" style="height: 33vh;">
                <img class="img-fluid" src="{{ asset('img/home/rugby.jpg') }}" alt="Imagen">
            </div>
        </div>
    </div>

@endsection
