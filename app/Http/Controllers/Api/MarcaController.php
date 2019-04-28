<?php

namespace LaravelCarros\Http\Controllers\Api;

use Illuminate\Http\Request;
use LaravelCarros\Http\Controllers\Controller;
use LaravelCarros\Http\Resources\MarcaResource;
use LaravelCarros\Http\Resources\MarcaResourceCollection;
use LaravelCarros\Marca;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new MarcaResourceCollection(Marca::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $marca = new Marca();
        $marca->marca = $request->post('marca');
        $marca->save();

        return new MarcaResource($marca);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new MarcaResource(Marca::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $marca = Marca::find($id);

        $marca->marca = $request->post('marca');
        $marca->save();

        return new MarcaResource(Marca::find($id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        abort(404);
        
        /** @var Marca $marca */
        $marca = Marca::find($id);
        $marca->delete();
    }
}
