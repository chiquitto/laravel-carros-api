<?php

use Illuminate\Database\Seeder;
use LaravelCarros\Carro;

class CarroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $uno = new Carro();
        $uno->idMarca = 1;
        $uno->modelo = 'Uno Mille';
        $uno->ano = 1999;
        $uno->img = 'https://img1.icarros.com/dbimg/galeriaimgmodelo/2/1812_1.png';
        $uno->save();

        $fusca = new Carro();
        $fusca->idMarca = 2;
        $fusca->modelo = 'Fusca';
        $fusca->ano = 1996;
        $fusca->img = 'https://img0.icarros.com/dbimg/imgmodelo/4/479_12.png';
        $fusca->save();

        $brasilia = new Carro();
        $brasilia->idMarca = 2;
        $brasilia->modelo = 'Brasilia';
        $brasilia->ano = 1989;
        $brasilia->img = 'https://img0.icarros.com/dbimg/imgmodelo/4/793_9.png';
        $brasilia->save();

        $corsa = new Carro();
        $corsa->idMarca = 3;
        $corsa->modelo = 'Corsa';
        $corsa->ano = 1996;
        $corsa->img = 'https://img0.icarros.com/dbimg/imgmodelo/4/134_4.png';
        $corsa->save();

        $chevette = new Carro();
        $chevette->idMarca = 4;
        $chevette->modelo = 'Chevette';
        $chevette->ano = 1997;
        $chevette->img = 'https://www.webclassicos.com.br/wp-content/uploads/2018/01/Sem-t%C3%ADtulo-3-1024x645.png';
        $chevette->save();

    }
}
