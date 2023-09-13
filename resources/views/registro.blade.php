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
                                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Ordenar por Tiempo estacionado">Tiempo estacionado (min.)</th>
                                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Ordenar por Tipo">Tipo</th>
                                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Ordenar por Fecha/Hora entrada">Fecha/Hora entrada</th>
                                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Ordenar por Fecha/Hora salida">Fecha/Hora salida</th>
                                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Ordenar por Monto a pagar">Monto a pagar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
@foreach($Parkings as $Parking)
                                                    <tr>
                                                        <td></td>
                                                        <td>{{ $Parking->placas }}</td>
                                                        <td>{{ $Parking->tiempo }}</td>
                                                        <td>{{ $Parking->tipo }}</td>
                                                        <td>{{ $Parking->entrada }}</td>
                                                        @if( $Parking->salida != null)
                                                        <td>{{ $Parking->salida }}</td>
                                                        @else
                                                        <td>
                                                        <form class="form-horizontal" autocomplete="off" method="POST" action="/regSalida/{{$Parking->id}}" enctype="multipart/form-data">
                                                            {{ csrf_field() }}
                                                            <div class="form-group{{ $errors->has('salida') ? ' has-error' : '' }}">
                                                                <div class="col-md-8">
                                                                    <input id="salida" type="time" class="form-control" name="salida" required step="3600" value="{{ old('salida') }}" placeholder="" autofocus autocomplete="off">
                                                                    @if ($errors->has('salida'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->first('salida') }}</strong>
                                                                    </span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-md-8 col-md-offset-2">
                                                                    <button type="submit" class="btn btn-primary">
                                                                        Registrar Salida
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        </td>
                                                        @endif
                                                        @php($Tipos = DB::table('tipos')->where('tipo','=',$Parking->tipo)->get())
                                                        
                                                        <td>
                                                        @foreach($Tipos as $Tipo)
                                                        @if($Parking->tipo = $Tipo->tipo)
                                                        {{ $Parking->tiempo * $Tipo->monto}} <br>
                                                        @endif
                                                        @endforeach
                                                        </td>

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
