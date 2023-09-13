<?php

namespace App\Http\Controllers;

use App\Models\Tipo;
use Illuminate\Http\Request;

class TiposController extends Controller
{
    public function viewTipos()
    {
        return view('tipos');
    }

    public function regTipo(Request $request)
    {
     $validateData = $request->validate([
         'Tipo' => 'required',
         'Monto' => 'required|numeric'
     ]);
     $Tipo = new Tipo;
     $Tipo->tipo = $request->Tipo;
     $Tipo->monto = $request->Monto;
     $Tipo->save();
     
     return redirect('/home');
    }
}
