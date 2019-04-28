<?php

namespace LaravelCarros\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MarcaResource extends JsonResource
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
            'idMarca' => $this->idMarca,
            'marca' => $this->marca
        ];
    }
}
