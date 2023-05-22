@extends('layouts.app')

@section('content')

    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                @include('layouts.navbars.guest.navbar')
            </div>
        </div>
    </div>

    <div class="container-fluid vh-100 d-flex flex-column">
        <div class="row flex-grow-1">
            <div class="col-md-2 align-self-center">
                <img src="{{ asset('img/home/columna.jpg') }}" alt="Imagen" class="img-fluid">
            </div>
            <div class="col-md-8">
                <div class="d-flex text-justify align-items-end h-50">
                    <h2>@lang('auth.textoAbout1')</h2>
                </div>
                <div class="d-flex text-justify justify-content-start text-start h-50 my-5" style="margin-left: 5rem;">
                    <h2>@lang('auth.textoAbout2')</h2>
                </div>
            </div>
        </div>
    </div>
@endsection
