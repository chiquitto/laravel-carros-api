<?php

use Illuminate\Database\Seeder;
use LaravelCarros\Marca;

class MarcaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fiat = new Marca();
        $fiat->marca = 'Fiat';
        $fiat->save();

        $vw = new Marca();
        $vw->marca = 'Volkswagen';
        $vw->save();

        $gm = new Marca();
        $gm->marca = 'Chevrolet';
        $gm->save();

        $ford = new Marca();
        $ford->marca = 'Ford';
        $ford->save();
    }
}
