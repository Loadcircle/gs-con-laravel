<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\MenuUpdateRequest;
use App\Http\Requests\MenuStoreRequest;
use App\Section;
use App\Menu;

class MenuController extends Controller
{
    public function __construct(){
        $this->middleware('auth'); // esto pide que para entrar este autorizado, o sea logeado
    }     
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menu
        $menu     = Menu::orderBy('section_id', 'ASC')
                    ->join('sections', 'sections.id', '=', 'menus.section_id')
                    ->select('menus.*', 'sections.name as section')
                    ->get();
        //menu
        return view('admin.menu.index', compact('menu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $menu       = Menu::find($id);   

        $section    = Section::where('status', '=', 'ACTIVE')->pluck('name', 'id');

        $count      = Menu::pluck('position');

        $array=array();
        $i=1;
        foreach($count as $c){
            $array[$i]=$c;
            $i++;
        }  
        return view('admin.menu.edit', compact('menu', 'array', 'section')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MenuUpdateRequest $request, $id)
    {
        $menu = Menu::find($id); 
        
        $menu->fill($request->all())->save();

        return redirect()->route('menus.index')
             ->with('info', 'Entrada actualizada con éxito');        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$post = Post::find($id)->delete();  este codigo ejecuta directamente el delete
        $section = Section::find($id);
        //$this->authorize('pass', $section);
        
        $section->delete();
        
        return back()->with('info', 'Eliminado correctamente');
    }
}
