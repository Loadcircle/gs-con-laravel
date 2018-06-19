<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Config;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //config
        $config     = Config::orderBy('id', 'ASC')->get();
            // $titulo     = $config['0']->value;
            // $telefono   = $config['1']->value;
            // $facebook   = $config['2']->value;
            // $direccion  = $config['3']->value;
        //config


        return view('admin.main.index', compact('config'));
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
        $config = Config::find($id);     
        
        return view('admin.main.edit', compact('config'));
    }

    public function edit2($id)
    {
        $config = Config::find($id);     
        
        return view('admin.main.edit', compact('config'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $config = Config::find($id); 

        $config->fill($request->all())->save();

         return redirect()->route('mains.index')
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
        $config = Config::find($id)->update(['status' => 'INACTIVE']); 

        return redirect()->route('mains.index')->with('info', 'Eliminado correctamente');
    }
}
