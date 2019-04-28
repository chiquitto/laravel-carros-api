<?php

use Illuminate\Database\Seeder;
use LaravelCarros\Carro;

class CarroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @link https://stackoverflow.com/questions/14837065/how-to-get-public-directory
     */
    public function run()
    {
        $fromPath = base_path() . "/docs/arquivos";

        $uno = new Carro();
        $uno->idMarca = 1;
        $uno->modelo = 'Uno Mille';
        $uno->ano = 1999;
        $uno->save();

        $uno->saveImg("$fromPath/uno.png");

        $fusca = new Carro();
        $fusca->idMarca = 2;
        $fusca->modelo = 'Fusca';
        $fusca->ano = 1996;
        $fusca->save();

        $fusca->saveImg("$fromPath/fusca.png");

        $brasilia = new Carro();
        $brasilia->idMarca = 2;
        $brasilia->modelo = 'Brasilia';
        $brasilia->ano = 1989;
        $brasilia->save();

        $brasilia->saveImg("$fromPath/brasilia.png");

        $corsa = new Carro();
        $corsa->idMarca = 3;
        $corsa->modelo = 'Corsa';
        $corsa->ano = 1996;
        $corsa->save();

        $corsa->saveImg("$fromPath/corsa.png");

        $chevette = new Carro();
        $chevette->idMarca = 4;
        $chevette->modelo = 'Chevette';
        $chevette->ano = 1997;
        $chevette->save();

        $chevette->saveImg("$fromPath/chevette.png");
    }
}
