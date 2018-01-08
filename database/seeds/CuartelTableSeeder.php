<?php

use Illuminate\Database\Seeder;
use App\Cuartel;
use App\Agente;

class CuartelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('cuartels')->delete();

        DB::table('cuartels')->insert(['id' => 1,'nombre' => 'Alicante', 'direccion' => 'Avda. Alfonso el Sabio, Nº3','horario' => '08:00-20:00']);
        DB::table('cuartels')->insert(['id' => 2,'nombre' => 'Valencia', 'direccion' => 'Calle Falsa 123, Nº54','horario' => '10:00-20:00']);
        DB::table('cuartels')->insert(['id' => 3,'nombre' => 'Castellon', 'direccion' => 'Avda. Ruperto Chapi, Nº1','horario' => '08:00-22:00']);
        DB::table('cuartels')->insert(['id' => 4,'nombre' => 'Murcia', 'direccion' => 'Calle Einstein, Nº11','horario' => '06:00-21:00']);
        DB::table('cuartels')->insert(['id' => 5,'nombre' => 'Albacete', 'direccion' => 'Avda. Jack Shepard, Nº12','horario' => '08:30-20:30']);
        DB::table('cuartels')->insert(['id' => 6,'nombre' => 'Almeria', 'direccion' => 'Avda. David Hume, Nº34','horario' => '09:00-20:40']);
        DB::table('cuartels')->insert(['id' => 7,'nombre' => 'Granada', 'direccion' => 'Avda. Ramiro el Aparador, Nº4']);
        DB::table('cuartels')->insert(['id' => 8,'nombre' => 'Jaen', 'direccion' => 'Bulevar Tercera Manzana, Nº8']);
        DB::table('cuartels')->insert(['id' => 9,'nombre' => 'San Vicente', 'direccion' => 'Plaza John Locke, Nº15']);
        DB::table('cuartels')->insert(['id' => 10,'nombre' => 'Cuenca', 'direccion' => 'Calle Kate Austen, Nº16']);
        DB::table('cuartels')->insert(['id' => 11,'nombre' => 'Teruel', 'direccion' => 'Calle James Ford, Nº23']);
        DB::table('cuartels')->insert(['id' => 12,'nombre' => 'Sevilla', 'direccion' => 'Avda. Hugo Reyes, Nº42']);
        DB::table('cuartels')->insert(['id' => 13,'nombre' => 'Cádiz', 'direccion' => 'Plaza Benjamin Linus, Nº108']);
        DB::table('cuartels')->insert(['id' => 14,'nombre' => 'Toledo', 'direccion' => 'Avda. Charles Whitmore, Nº31']);
        DB::table('cuartels')->insert(['id' => 15,'nombre' => 'Huelva', 'direccion' => 'Avda. Ricardo Alpert Nº78']);
        DB::table('cuartels')->insert(['id' => 16,'nombre' => 'Barcelona', 'direccion' => 'Plaza de La Isla, Nº64']);


    }
}

