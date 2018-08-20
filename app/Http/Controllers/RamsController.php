<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ram;

class RamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $marcas = Ram::orderBy("id")
        ->paginate(10);
        return view('ram.index', compact('marcas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        
        return view('ram.create');

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
            $marca = new Ram($request->all());
            $marca->save();
            //dd($marca);
            flash('Agregado correctamente', 'success');
            return redirect()->route('ram.index');
            
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
        $marca = Ram::find($id);
        return view('ram.edit', compact('marca'));
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

            $marcaUp = Ram::find($id);
            $marcaUp->fill($request->all()); 
            $marcaUp->save();
             flash('Actualizado correctamente', 'success');
             return redirect()->route('ram.index');
            
        } catch (Exception $e) {
             flash('Algo falló', 'warning');
             return redirect()->route('ram.index');
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

         $marcaBorrada = Ram::destroy($id);
         flash('Eliminado correctamente', 'success');
         return redirect()->route('ram.index');
            
        } catch (Exception $e) {
             flash('Algo falló', 'warning');
         return redirect()->route('ram.index');
        }
        

    }
}
