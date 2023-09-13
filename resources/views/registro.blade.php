@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Vehiculos registrados
            </div>
            <div class="card shadow mb-4">
                <div class="card-body">
                    
                <a href="/entradas">
                    <button type="button" class="btn btn-primary">
                        Registrar nueva entrada
                    </button>
                </a>
                    <div class="table-responsive" style="width: 95%;">
                    <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                            <thead>
                                <tr role="row">
                                    <th tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">#</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Ordenar por Placas">Placas</th>
                                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Ordenar por Tiempo estacionado">Tiempo estacionado</th>
                                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Ordenar por Tipo">Tipo</th>
                                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Ordenar por Fecha/Hora entrada">Fecha/Hora entrada</th>
                                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Ordenar por Fecha/Hora salida">Fecha/Hora salida</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
@foreach($Parkings as $Parking)
                                                    <tr>
                                                        <td></td>
                                                        <td>{{ $Parking->placas }}</td>
                                                        <td></td>
                                                        <td>{{ $Parking->tipo }}</td>
                                                        <td>{{ $Parking->entrada }}</td>
                                                        <td>{{ $Parking->salida }}</td>
@endforeach
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        </div>
    </div>
@endsection
