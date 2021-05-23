<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Support\Facades\DB;

class CategoriaController extends Controller
{
    function formCategoria(){

        return \view('crearCategoria');
    }

    function crearCategoria(Request $request){

        $categoria = new Categoria;

        $categoria->nombre = $request->nombreCategoria;

        $categoria->save();

        return back()->with('mensaje','Categoria Creado');
    }
}
