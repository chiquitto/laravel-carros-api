<?php

namespace LaravelCarros;

use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    protected $primaryKey = 'idCarro';

    public function saveImg($from) {
        copy($from, $this->publicImgPath());
        $this->hasImg = true;
        $this->save();
    }

    public function publicImgPath() {
        return public_path() . "/fotos/carro{$this->idCarro}.png";
    }
}
