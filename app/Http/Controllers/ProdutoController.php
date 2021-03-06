<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ProdutoController extends Controller
{
    public function listar()
    {
        //$produtos = Produto::all();
        $p = Input::get('descricao'); //só vai acontecer quando o post acontecer
        $produtos = Produto::where('descricao', 'like', '%'.$p.'%')->get();
        return view('produto.listar')->with('produtos', $produtos);

    }
}
