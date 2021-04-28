<?php

namespace App\Http\Controllers;

use App\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['productos']=Productos::paginate(15);
        return view('productos.index', $data);
        /*$productos = Productos::all();
        return view('productos.index', $productos);*/

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('productos.create');
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
        $dataProducts = $request->except('_token','saveitem');
        Productos::insert($dataProducts);
        //return response()->json($dataProducts);
        return redirect('productos/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function show(Productos $productos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    /*public function edit(Productos $productos)
    {
        //
        return view('productos.edit');
    }*/
    public function edit($id) {
        $productos = Productos::findOrFail($id);
        return view('productos.edit', compact('productos'));
     }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){

        $productos = Productos::findOrFail($id);
        $productos->update($request->all());
        return redirect('productos');
    }
    /*public function update(Request $request, Productos $productos)
    {
        //
    }*/

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Productos $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Productos::destroy($id);
        return redirect('productos');
    }
}
