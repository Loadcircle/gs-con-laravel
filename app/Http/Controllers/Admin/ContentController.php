<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ContentUpdateRequest;
use App\Http\Requests\ContentStoreRequest;
use App\Content;
use App\Section;



class ContentController extends Controller
{
    public function __construct(){
        $this->middleware('auth'); // esto pide que para entrar este autorizado, o sea logeado
    }     
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($section_id)
    {
        $section = Section::find($section_id);
        $titulo_seccion = $section->name;
        $section_type = $section->section_types_id;
        //content
        $content    = Content::orderBy('contents.id', 'ASC')
                    ->join('sections', 'sections.id', '=', 'contents.section_id')
                    ->select('contents.*', 'sections.name as section')
                    ->where('sections.id', '=', $section_id)
                    ->get();
        //content
        return view('admin.content.index', compact('content', 'section_id', 'titulo_seccion', 'section_type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($section_id)
    {
        return view('admin.content.create', compact('section_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContentStoreRequest $request)
    {
        $content = Content::create($request->all()); //esto retorna contenido masivo

        //image
        if($request->file('file')){ //esta condicion verifica en el formulario si se ha enviado un archivo
            
            $path = Storage::disk('public')//almacenar en el disco public que busca en filesystems.php en config
                ->put('image', $request->file('file'));  //almacena en una carpeta llamada 'image' el archivo request
                //todo este codigo superior genero una ruta relativa

                $content->fill($request->all())->save();

                $content->fill(['file' => $path])->save();
                //con fill agregamos a la variable content la ruta generada como 'file', asset convierte la ruta en una ruta completa
                        

                return redirect()->route('contents',['id' => $request->section_id])
                    ->with('info', 'Contenido creado con éxito');        
        }else{
            $content->fill($request->all())->save();
            return redirect()->route('contents', ['id' => $request->section_id])
                ->with('info', 'Contenido creado con éxito');        
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $content = Content::find($id);
        Storage::disk('public')->delete($content->file); 
        $content->fill(['file' => null])->save();

        return back()->with('info', 'Imagen eliminada correctamente');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($section_id,$id)
    {
        $content    = Content::find($id);   

        return view('admin.content.edit', compact('content', 'section_id', 'id')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ContentUpdateRequest $request, $id)
    {
        $content = Content::find($id);             
        //$this->authorize('pass', $carousel);

        //image
        if($request->file('file')){ //esta condicion verifica en el formulario si se ha enviado un archivo
            
            Storage::disk('public')->delete($content->file);

            $path = Storage::disk('public')//almacenar en el disco public que busca en filesystems.php en config
                ->put('image', $request->file('file'));  //almacena en una carpeta llamada 'image' el archivo request
                //todo este codigo superior genero una ruta relativa
                $content->fill($request->all())->save();

                $content->fill(['file' => $path])->save();
                //con fill agregamos a la variable content la ruta generada como 'file', asset convierte la ruta en una ruta completa
        }else{            
            $content->fill(['name' => $request->name, 'content' => $request->content, 'position' => $request->position, 'section_id' => $request->section_id,'status' => $request->status])->save();
        }
                
         return redirect()->route('contents',['id' => $request->section_id])
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
        $content = Content::find($id);
        //print_r($carousel->file);
        //$this->authorize('pass', $carousel);
        
        Storage::disk('public')->delete($content->file);
        $content->delete();
        
        return back()->with('info', 'Eliminado correctamente');
    }
}
