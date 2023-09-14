<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #D6EEEE;
}
</style>
</head>
<body>
    <h1 style='text-align: center;'>Estacionamiento</h1>
    <div>
        <h2> Vehiculos registrados </h2>
        <div class="row">
            <table style="width: 100%;">
            <thead>
                <tr role="row">
                    <th> <h4>Placas</h4></th>
                    <th> <h4>Tiempo estacionado (min.)</h4></th>
                    <th> <h4>Tipo</h4></th>
                    <th> <h4>Fecha/Hora entrada</h4></th>
                    <th> <h4>Fecha/Hora salida</h4></th>
                    <th> <h4>Monto a pagar</h4></th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $Parking)
                <tr>
                    <td> {{$Parking->placas}} </td>
                    <td> {{$Parking->tiempo}} </td>
                    <td> {{$Parking->tipo}} </td>
                    <td> {{$Parking->entrada}} </td>
                    <td> {{$Parking->salida}} </td>
                    @php($Tipos = DB::table('tipos')->where('tipo','=',$Parking->tipo)->get())
                    <td>
                        @foreach($Tipos as $Tipo)
                        @if($Parking->tipo = $Tipo->tipo)
                        ${{ $Parking->tiempo * $Tipo->monto}} <br>
                        @endif
                        @endforeach
                    </td>
                </tr>
                @endforeach
            </tbody>
        </div>
    </div>
</body>
</html>
