<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libros = Libro::all();
        return view('articulo.index')->with('libros', $libros) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articulo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $libros = new Libro();

        $libros->nombre = $request->get('nombre');
        $libros->autor = $request->get('autor');
        $libros->editorial = $request->get('editorial');
        $libros->categoria = $request->get('categoria');
        $libros->descripcion = $request->get('descripcion');

        $libros->save();

        return redirect('/libros');

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
        $libro = Libro::find($id);
        return view('articulo.edit')->with('libro',$libro);
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
        $libro = Libro::find($id);

        $libro->nombre = $request->get('nombre');
        $libro->autor = $request->get('autor');
        $libro->editorial = $request->get('editorial');
        $libro->categoria = $request->get('categoria');
        $libro->descripcion = $request->get('descripcion');

        $libro->save();

        return redirect('/libros');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $libro = Libro::find($id);
        $libro->delete();
        return redirect('/libros');
    }
}
