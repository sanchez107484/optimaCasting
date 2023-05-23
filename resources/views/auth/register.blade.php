@extends('layouts.app')

@section('content')
    @include('layouts.navbars.guest.navbar')

    <main class="main-content  mt-0">
        <div class="container">
            <div class="row align-items-center justify-content-center" style="height: 100vh;">
                <div class="mx-auto d-flex align-items-center">
                    <div class="card z-index-0">
                        <div class="card-header text-center pb-0">
                            <h4 class="font-weight-bolder">@lang('guest.titulo')</h4>
                            <p>@lang('guest.textoRegistro')</p>
                        </div>
                        <div class="card-body pt-0">
                            <form method="POST" action="{{ route('register.perform') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="company" class="form-label">@lang('guest.nombreEmpresa')</label>
                                        <input type="text" name="company" class="form-control" maxlength="45" id="company" autofocus="true" placeholder="@lang('guest.nombreEmpresaPH')" onkeypress="return noenter()">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="company-10" class="form-label">@lang('guest.nombreCorto')</label>
                                        <input type="text" name="company-10" class="form-control" maxlength="10" style="text-transform: uppercase;" id="company-10" placeholder="@lang('guest.nombreCortoPH')" onkeypress="return noenter()">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="company-3" class="form-label">@lang('guest.clave')</label>
                                        <input type="text" name="company-3" class="form-control" maxlength="3" style="text-transform: uppercase;" id="company-3" placeholder="@lang('guest.clavePH')" onkeypress="return noenter()">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="adress" class="form-label">@lang('guest.direccion')</label>
                                        <input type="text" name="adress" class="form-control" maxlength="40" id="adress" placeholder="@lang('guest.direccionPH')" onkeypress="return noenter()">
                                    </div>

                                    <div class="col-md-3">
                                        <label for="postal-code" class="form-label">@lang('guest.cpo')</label>
                                        <input type="text" name="postal-code" class="form-control" maxlength="8" id="postal-code" placeholder="@lang('guest.cpoPH')" onkeypress="return noenter()">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="city" class="form-label">@lang('guest.ciudad')</label>
                                        <input type="text" name="city" class="form-control" maxlength="25" id="city" placeholder="@lang('guest.ciudadPH')" onkeypress="return noenter()">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="country" class="form-label">@lang('guest.pais')</label>
                                        <select name="country" id="country" class="form-select">
                                            <option value="Spain">Spain</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="France">France</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="idioma" class="form-label">@lang('guest.idioma')</label>
                                        <select name="country" id="country" class="form-select">
                                            <option value="Spanish">Spanish</option>
                                            <option value="English">English</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="company-type">@lang('guest.tipoEmpresa')</label>
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="company-type" id="company-type" onkeypress="return noenter()" value="Casting" required>
                                                <label class="form-check-label" for="company-type">@lang('guest.fundicion')</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="company-type" onkeypress="return noenter()" value="Supplier">
                                                <label class="form-check-label" for="company-type">@lang('guest.suministrador')</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="e-mail" class="form-label">@lang('guest.email')</label>
                                        <input type="text" name="e-mail" class="form-control" maxlength="35" id="e-mail" placeholder="@lang('guest.emailPH')" onkeypress="return noenter()">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="www" class="form-label">@lang('guest.web')</label>
                                        <input type="text" name="www" class="form-control" maxlength="35" id="www" placeholder="@lang('guest.webPH')" onkeypress="return noenter()">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="telephone" class="form-label">@lang('guest.telefono')</label>
                                        <input type="text" name="telephone" class="form-control" maxlength="12" id="telephone" placeholder="@lang('guest.telefonoPH')" onkeypress="return noenter()">
                                    </div>

                                    <div class="form-group col-md-12 mt-4 text-white bg-secondary text-center">@lang('guest.usuarioPrincipalDatos')</div>

                                    <div class="col-md-4">
                                        <label for="user-name">@lang('guest.nombreUsuario')</label>
                                        <input type="text" name="user-name" class="form-control" maxlength="15" id="user-name" placeholder="@lang('guest.nombreUsuarioPH')" onkeypress="return noenter()">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="user-last-name">@lang('guest.apellidoUsuario')</label>
                                        <input type="text" name="user-last-name" class="form-control" maxlength="25" id="user-last-name" placeholder="@lang('guest.apellidoUsuarioPH')" onkeypress="return noenter()">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="user-mail">@lang('guest.emailUsuario')</label>
                                        <input type="text" name="user-mail" class="form-control" maxlength="35" id="user-mail" placeholder="@lang('guest.emailUsuarioPH')" onkeypress="return noenter()">
                                    </div>


                                    <div class="col-12 pt-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="conditions" id="conditions">
                                            <label class="form-check-label" for="conditions">
                                                @lang('guest.accept_conditions')
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">@lang('guest.registrarse')</button>
                                </div>
                                <p class="text-sm mt-3 mb-0">@lang('guest.preguntaIniciaSesion')<a href="{{ route('login') }}"
                                        class="text-dark font-weight-bolder">@lang('guest.iniciaSesión')</a></p>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('layouts.footers.guest.footer')
@endsection
