@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Registro de entradas
            </div>
            <div class="card-body">
                <form class="form-horizontal" autocomplete="off" method="POST" action="/regEntrada" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('placas') ? ' has-error' : '' }}">
                        <label for="placas" class="col-md-2 control-label">Placas</label>
                        <div class="col-md-8">
                            <input id="placas" type="text" class="form-control" name="placas" value="{{ old('placas') }}" placeholder="" autofocus autocomplete="off">
                            @if ($errors->has('placas'))
                            <span class="help-block">
                                <strong>{{ $errors->first('placas') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <br>
                    <div class="form-group{{ $errors->has('tipo') ? ' has-error' : '' }}">
                        <label for="tipo" class="col-md-2 control-label">Tipo de vehiculo</label>
                        
                        <div class="col-md-8">
                        <select id="tipo" class="form-control" name="tipo" value="{{ old('tipo') }}" placeholder="" autofocus autocomplete="off">
                                @foreach($Tipos as $Tipo)
                                <option value="{{$Tipo->tipo}}">{{$Tipo->tipo}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('tipo'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tipo') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <br>
                    <div class="form-group{{ $errors->has('entrada') ? ' has-error' : '' }}">
                        <label for="entrada" class="col-md-2 control-label">Hora entrada</label>
                        <div class="col-md-8">
                            <input id="entrada" type="datetime-local" class="form-control" name="entrada" required value="{{ old('entrada') }}" placeholder="" autofocus autocomplete="off">
                            @if ($errors->has('entrada'))
                            <span class="help-block">
                                <strong>{{ $errors->first('entrada') }}</strong>
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
