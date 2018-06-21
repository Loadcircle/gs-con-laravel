<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SectionUpdateRequest;
use App\Http\Requests\SectionStoreRequest;
use App\Section;
use App\Menu;

class SectionController extends Controller
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
        //section
        $section     = Section::orderBy('id', 'ASC')->get();
        //section


        return view('admin.section.index', compact('section'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $count = Section::pluck('position');

        $array=array();
        $i=1;
        foreach($count as $c){
            $array[$i]=$c;
            $i++;
        }

        return view('admin.section.create', compact('array'));        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SectionStoreRequest $request)
    {
        $section    = Section::create($request->all());

        $menu       = Menu::create(
                    ['name' => $request->name, 
                     'section_id' => $section->id, 
                     'position' => $request->position,
                     'status' => $request->status
                     ]);
        
        $section->fill($request->all())->save();

        return redirect()->route('sections.index')
        ->with('info', 'Sección creada con éxito');      
    
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
        $section = Section::find($id);   

        $count = Section::pluck('position');

        $array=array();
        $i=1;
        foreach($count as $c){
            $array[$i]=$c;
            $i++;
        }  
        return view('admin.section.edit', compact('section', 'array')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SectionUpdateRequest $request, $id)
    {
        $section = Section::find($id); 
        $menu = Menu::where('id', '=', $id)->firstOrFail();

        $menu->fill(['position' => $request->position,'status' => $request->status])->save();
        $section->fill($request->all())->save();

        return redirect()->route('sections.index')
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
