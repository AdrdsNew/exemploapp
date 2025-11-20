<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BolasEsportivas;

class CadastrarController extends Controller
{
     public function salvar(Request $request){
        $request->validate([
          "marca" => "required|min:3|max:50",
          "esporte" => "required|min:3|max:50",
          "pressao_psi" => "required|integer",
          "diametro" => "required|decimal:2",
          "padrao_campeonato" => "required|boolean"
            
        ]);
        $objeto = new BolasEsportivas();
        $objeto->fill($request->all());
        $objeto->save();
        return view('cadastrosalvo');
        
        
}
}