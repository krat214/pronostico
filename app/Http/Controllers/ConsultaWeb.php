<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consulta;

class ConsultaWeb extends Controller
{
    public function show(Consulta $consulta)
    {

        $consultas=Consulta::orderBy('created_at','desc')->paginate(5);

        return view('consulta',compact('consultas'));

    }
}
