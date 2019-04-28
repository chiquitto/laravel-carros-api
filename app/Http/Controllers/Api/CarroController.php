<?php

namespace LaravelCarros\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use LaravelCarros\Carro;
use LaravelCarros\Http\Controllers\Controller;
use LaravelCarros\Http\Resources\CarroResource;
use LaravelCarros\Http\Resources\CarroResourceCollection;

class CarroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new CarroResourceCollection(Carro::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $this->createStoreValidator($request);
        if ($validator->fails()) {
            $messages = $validator->messages();
            $errors = $messages->all();
            return response()->json(['errors' => $errors], 500);
        }

        $carro = new Carro();
        $carro->idMarca = $request->post('idMarca');
        $carro->modelo = $request->post('modelo');
        $carro->ano = $request->post('ano');
        $carro->img = $request->post('img', null);
        $carro->save();

        return new CarroResource($carro);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new CarroResource(Carro::find($id));
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
        $validator = $this->createStoreValidator($request);
        if ($validator->fails()) {
            $messages = $validator->messages();
            $errors = $messages->all();
            return response()->json(['errors' => $errors], 500);
        }

        $carro = Carro::find($id);

        $carro->idMarca = $request->post('idMarca');
        $carro->modelo = $request->post('modelo');
        $carro->ano = $request->post('ano');
        $carro->img = $request->post('img', null);
        $carro->save();

        return new CarroResource($carro);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        abort(404);

        /** @var Carro $carro */
        $carro = Carro::find($id);
        $carro->delete();
    }

    /**
     * @param Request $request
     * @return \Illuminate\Validation\Validator
     */
    private function createStoreValidator(Request $request)
    {
        $rules = [
            'idMarca' => 'required',
            'modelo' => 'required',
            'ano' => 'required',
        ];

        $messages = [
            'idMarca.required' => 'Parametro @idMarca@ é obrigatório!',
            'modelo.required' => 'Parametro @modelo@ é obrigatório!',
            'ano.required' => 'Parametro @ano@ é obrigatório!',
        ];

        return Validator::make($request->all(), $rules, $messages);
    }
}
