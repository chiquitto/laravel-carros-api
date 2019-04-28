<?php

namespace LaravelCarros\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\URL;

class CarroResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'idCarro' => $this->idCarro,
            'idMarca' => $this->idMarca,
            'modelo' => $this->modelo,
            'ano' => $this->ano,
            'img' => $this->img
        ];
    }
}
