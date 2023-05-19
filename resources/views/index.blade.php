@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="assets/css/responsive.css">
	<link rel="stylesheet" href="assets/css/estilos.css">
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

    <body>
        <div class="contenedor">
            <div class="present">@lang('auth.descripcionHome')</div>
            <div class="title">@lang('auth.titulo')</div>
            <img class="imag_cent" src="{{ asset('img/home/rugby.jpg') }}" alt="Imagen">
        </div>
    </body>

@endsection
