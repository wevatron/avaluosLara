<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marca;

class MarcasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $marcas = Marca::orderBy("id")
        ->paginate(10);
        return view('marca.index', compact('marcas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        
        return view('marca.create');

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
        try {
            $marca = new Marca($request->all());
            $marca->save();
            //dd($marca);
            flash('Agregado correctamente', 'success');
            return redirect()->route('marcas.index');
            
        } catch (Exception $e) {
            flash('Algo falló', 'warning');
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
        //
        $marca = Marca::find($id);
        return view('marca.edit', compact('marca'));
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
        //
        try {

            $marcaUp = Marca::find($id);
            $marcaUp->fill($request->all()); 
            $marcaUp->save();
             flash('Actualizado correctamente', 'success');
             return redirect()->route('marcas.index');
            
        } catch (Exception $e) {
             flash('Algo falló', 'warning');
             return redirect()->route('marcas.index');
        }
    }
     

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        try {

         $marcaBorrada = Marca::destroy($id);
         flash('Eliminado correctamente', 'success');
         return redirect()->route('marcas.index');
            
        } catch (Exception $e) {
             flash('Algo falló', 'warning');
         return redirect()->route('marcas.index');
        }
        

    }

    public function nombreMarcaAjax()
    {
       $marcas = Marca::orderBy("nombreMarca")
       ->where('id', '>=' ,'21')
       ->get();
       return $marcas;
    }
}
