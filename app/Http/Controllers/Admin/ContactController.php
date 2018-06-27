<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;
use App\Contact_status;
use App\Email;

class ContactController extends Controller
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
        $contact = Contact::orderBy('contacts.id', 'DESC')
        ->join('contact_status', 'contact_status.id', '=', 'contacts.status')
        ->select('contacts.*', 'contact_status.name as c_status')
        ->get();
        $status = Contact_status::get();
        $emails = Email::get();
        return view('admin.contact.index', compact('contact', 'status', 'emails'));
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
        $contact = Contact::find($id);        
        $contact->orderBy('contacts.id', 'DESC')
        ->join('contact_status', 'contact_status.id', '=', 'contacts.status')
        ->select('contacts.*', 'contact_status.name as c_status')
        ->get();

        $array = Contact_status::pluck('name', 'id');

        return view('admin.contact.edit', compact('contact', 'array'));
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
        $contact = Contact::find($id); 

        $contact->fill($request->all())->save();

        return redirect()->route('contacts.index')
             ->with('info', 'Estatus actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
