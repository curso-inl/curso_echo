<?php

namespace App\Http\Controllers;

use App\Events\accion_patrulla;
use App\Models\comisaria;
use App\Models\patrulla;
use Illuminate\Http\Request;

class comisariaController extends Controller
{
    //
    public function show(comisaria $comisaria) {
        //LLenar una variable con los mensajes
        $listado = $comisaria->rel_patrulla;

        return view('comisaria',compact('comisaria','listado'));


    }

    public function nuevo_mensaje(Request $request) {

        $nuevo = patrulla::create($request->all());

        accion_patrulla::dispatch($nuevo);

        return redirect()->back();
    }
}
