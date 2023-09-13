<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parking;
use Illuminate\Support\Facades\DB;

class ParkingController extends Controller
{
    
    public function viewEntradas()
    {
        $Tipo = DB::table('Tipos')->paginate(10000, ['*'], 'Tipos');
        return view('entradas', ['Tipos'=>$Tipo]);
    }


   public function regEntrada(Request $request)
   {
    $validateData = $request->validate([
        'placas' => 'required',
        'tipo' => 'required',
        'tiempo' => 'nullable|sometimes',
        'entrada' => 'required',
        'salida' => 'nullable|sometimes'
    ]);
    $Parking = new Parking;
    $Parking->placas = $request->placas;
    $Parking->tipo = $request->tipo;
    $Parking->entrada = $request->entrada;
    $Parking->save();
    
    return redirect('/home');
   }
}
