<?php

namespace App\Http\Controllers;

use App\Models\comisaria;
use App\Models\patrulla;
use Illuminate\Http\Request;

class comisariaController extends Controller
{
    //
    public function show(comisaria $comisaria) {

        $listado = $comisaria->rel_patrulla;

        return view('comisaria',compact('comisaria','listado'));


    }

    public function nuevo_mensaje(Request $request) {
        $nuevo = patrulla::create($request->all());
        return redirect()->back();
    }
}
