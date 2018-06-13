<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Config;
use App\Content;
use App\Menu;
use App\Section;

class homeController extends Controller
{
    public function index(){

        //config
        $config     = Config::where('status', 'ACTIVE')->get();
        $titulo     = $config['0']->value;
        $telefono   = $config['1']->value;
        $facebook   = $config['2']->value;
        $direccion  = $config['3']->value;
        //config

        //Menu
        $menu       =Menu::join('sections', 'menus.section_id', '=','sections.id')
                    ->select('menus.*', 'sections.slug')
                    ->where('menus.status', 'ACTIVE')
                    ->orderBy('position', 'ASC')->get();
        //Menu
        
        return view('welcome', compact('titulo','telefono', 'direccion', 'facebook', 'menu'));
    }

    public function enviar(Request $request){       
        
        if($request->ajax()){
            $nombre = $request->input("nombre");
            return dd($nombre);
            
        }
    }
}

