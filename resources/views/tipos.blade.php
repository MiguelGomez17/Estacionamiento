@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Registro de entradas
            </div>
            <div class="card-body">
                <form class="form-horizontal" autocomplete="off" method="POST" action="/regTipo" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('Tipo') ? ' has-error' : '' }}">
                        <label for="Tipo" class="col-md-2 control-label">Tipo de vehiculo</label>
                        <div class="col-md-8">
                            <input id="Tipo" type="text" class="form-control" name="Tipo" value="{{ old('Tipo') }}" placeholder="Tipo de vehiculo" autofocus autocomplete="off">
                            @if ($errors->has('Tipo'))
                            <span class="help-block">
                                <strong>{{ $errors->first('Tipo') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <br>
                    <div class="form-group{{ $errors->has('Monto') ? ' has-error' : '' }}">
                        <label for="Monto" class="col-md-2 control-label">Monto por minuto estacionado</label>
                        
                        <div class="col-md-8">
                            <input id="Monto" type="number" class="form-control" name="Monto" value="{{ old('Monto') }}" placeholder="Monto por minuto estacionado" autofocus autocomplete="off">
                            @if ($errors->has('Monto'))
                            <span class="help-block">
                                <strong>{{ $errors->first('Monto') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-2">
                            <button type="submit" class="btn btn-primary">
                                Guardar
                            </button>
                        </div>
                    </div>                    
                </form>
            </div>
        </div>
    </div>
@endsection
