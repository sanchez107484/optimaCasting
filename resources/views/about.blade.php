@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="assets/css/responsive.css">
	<link rel="stylesheet" href="assets/css/estilos.css">
    <link rel="stylesheet" href="assets/css/grid_about.css">
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
            <img class="imag_cent" src="{{ asset('img/home/columna.jpg') }}" alt="Imagen">
            <div class="suppliers">@lang('auth.textoAbout1')</div>
            <div class="customers">@lang('auth.textoAbout2')</div>
        </div>
    </body>

@endsection
