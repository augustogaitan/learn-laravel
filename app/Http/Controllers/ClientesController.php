<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ClientesCreateRequest;
use App\Http\Requests\ClientesUpdateRequest;


use App\Clientes;
use Redirect;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Clientes::all();
        return view('clientes.index',compact('clientes'));
        //return view('modales.modalCliente',compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientesCreateRequest $request)
    {
         Clientes::create([
            'nombre'=>$request['nombre'],
            'apellidos'=>$request['apellidos'],
            'dni'=>$request['dni'],
            'direccion'=>$request['direccion'],
            'ciudad'=>$request['ciudad'],
            'telefono'=>$request['telefono'],
            'email'=>$request['email'],
            ]);

        return redirect('/clientes')->with('message','store');
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
        $clientes = Clientes::find($id);
        return view('clientes.edit', compact('clientes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClientesUpdateRequest $request, $id)
    {
        $clientes = Clientes::find($id);
        $clientes->fill($request->All());
        $clientes->save();
        
        return Redirect::to('/clientes');
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

    public function search(Request $request)
    {
    // Gets the query string from our form submission 
    $query = Request::input('search');
    // Returns an array of articles that have the query string located somewhere within 
    // our articles titles. Paginates them so we can break up lots of search results.
    $articles = DB::table('clientes')->where('nombre', 'LIKE', '%' . $query . '%')->paginate(10);

    // returns a view and passes the view the list of articles and the original query.
    //return view('page.search', compact('articles', 'query'));
    return view('clientes.index',compact('clientes','query'));
    }
}
