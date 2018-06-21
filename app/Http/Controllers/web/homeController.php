<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Config;
use App\Content;
use App\Menu;
use App\Logo;
use App\Section;
use App\Carousel;

class homeController extends Controller
{
    public function index(){

        //logos
        $logos      = Logo::get();
        if((isset($logos['0']) && $logos['0']->status == 'ACTIVE')){
            $logo1 = $logos['0']->file;
        }
        if((isset($logos['1']) && $logos['1']->status == 'ACTIVE')){
            $logo2 = $logos['1']->file;
        }
        if((isset($logos['2']) && $logos['2']->status == 'ACTIVE')){
            $favicon = $logos['2']->file;
        }
        //logos

        //info
        $info     = Config::get();
        if((isset($info['0']) && $info['0']->status == 'ACTIVE')){
            $titulo = $info['0']->value;
        }
        if((isset($info['1']) && $info['1']->status == 'ACTIVE')){
            $telefono = $info['1']->value;
        }
        if((isset($info['2']) && $info['2']->status == 'ACTIVE')){
            $facebook = $info['2']->value;
        }
        if((isset($info['3']) && $info['3']->status == 'ACTIVE')){
            $direccion = $info['3']->value;
        }
        //info

        //Menu
        $menu       =Menu::join('sections', 'menus.section_id', '=','sections.id')
                    ->select('menus.*', 'sections.slug')
                    ->where('menus.status', 'ACTIVE')
                    ->orderBy('position', 'ASC')->get();
        //Menu
        
        //carousel
        $carousel   =Carousel::where('status', 'ACTIVE')
                    ->orderBy('position', 'ASC')->get();
        //carousel

        return view('welcome', 
            compact('logo1', 'logo2', 'favicon', 
                    'titulo', 'telefono', 'facebook', 'direccion', 
                    'menu',
                    'carousel'));
    }

    public function enviar(Request $request){       
        
        if($request->ajax()){
            $nombre = $request->input("nombre");
            return dd($nombre);
            
        }
    }
}

