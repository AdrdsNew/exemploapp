<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BolasEsportivas;

class XmlController extends Controller
{
    public function gerarXml(){
        $dados = BolasEsportivas::all();
        
        return response()->view('data-xml',['registros' => $dados])->header('Content-Type', 'application/xml');
    }
}
