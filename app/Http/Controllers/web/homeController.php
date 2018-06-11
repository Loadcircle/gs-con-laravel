<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class homeController extends Controller
{
    public function enviar(Request $request){
        
        
        if($request->ajax()){
            $nombre = $request->input("nombre");
            return dd($nombre);
            
        }
    }
}

