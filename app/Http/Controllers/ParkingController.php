<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parking;

class ParkingController extends Controller
{
   public function regEntrada(Request $request)
   {/*
    $validateData = $request->validate([
        'placas' => 'required',
        'tipo' => 'required',
        'entrada' => 'required',
        'salida' => 'nullable|sometimes'
    ]);*/
    $Parking = new Parking;
    $Parking->placas = $request->placas;
    $Parking->tipo = $request->tipo;
    $Parking->entrada = $request->entrada;
    $Parking->save();
    
    return redirect('/home');

   }
}
