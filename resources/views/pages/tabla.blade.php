@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('css')
<link href = "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet">
<link href = "https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Tables'])

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>{{$tabla['pantalla']}}</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive p-0">
                            <table id="id-tabla" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        @foreach ($tabla['titulos'] ?? [] as $titulo)
                                            {{-- <th class="text-uppercase text-secondary font-weight-bolder"> --}}
                                            {{-- <th class="align-middle text-center"> --}}
                                            <th>
                                                {{ $titulo }}
                                            </th>
                                        @endforeach
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($tabla['datos'] ?? [] as $dato)
                                    <tr>
                                        @foreach ($dato as $valor)
                                            {{-- <td class="align-middle text-center"> --}}
                                            <td>
                                                {{ $valor }}
                                            </td>
                                            {{-- <td>
                                                <p class="mb-0">{{ $valor }}</p>
                                            </td> --}}
                                        @endforeach
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @section('js')
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

        <script>
            $(document).ready(function () {
                $('#id-tabla').DataTable();
            });
        </script>
    @endsection

@endsection
