<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Config;
use App\Content;
use App\Menu;
use App\Logo;
use App\Section;
use App\Section_type;
use App\Carousel;

class WebController extends Controller
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
        if((isset($info['4']) && $info['4']->status == 'ACTIVE')){
            $description = $info['4']->value;
        }
        if((isset($info['5']) && $info['5']->status == 'ACTIVE')){
            $keywords = $info['5']->value;
        }
        if((isset($info['6']) && $info['6']->status == 'ACTIVE')){
            $author = $info['6']->value;
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

        //secciones
        $secciones  =Section::where('status', 'ACTIVE')->whereNotNull('section_types_id')                    
                    ->orderBy('position', 'ASC')->get();
        //secciones

        $contenido=array();
        $i=0;
        foreach($secciones as $sec){
            //contenido
            $contenido[$i]  =Content::where([
                            ['status', '=', 'ACTIVE'],
                            ['section_id', '=', $sec->id]
                        ])->orderBy('position', 'ASC')->get();
            //contenido
            $i++;
        }

        //contacto
        $contac  =Section::where('status', 'ACTIVE')->where('section_types_id', '5')->get();
        $contacto=$contac->count();
        //contacto
        return view('welcome', 
            compact('logo1', 'logo2', 'favicon', 
                    'titulo', 'telefono', 'facebook', 'direccion','description', 'keywords', 'author', 
                    'menu',
                    'carousel',
                    'secciones',
                    'contenido',
                    'contacto'));
    }

    public function enviar(Request $request){       
        
        if($request->ajax()){
            $nombre = $request->input("nombre");
            
        }
    }
}

