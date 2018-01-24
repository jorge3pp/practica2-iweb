<?php

use Illuminate\Database\Seeder;

class LangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('lang')->delete();
        
        DB::table('lang')->insert(['proglang' => 'Java']);
        DB::table('lang')->insert(['proglang' => 'C++']);
        DB::table('lang')->insert(['proglang' => 'C']);
        DB::table('lang')->insert(['proglang' => 'C#']);
        DB::table('lang')->insert(['proglang' => 'JavaScript']);
        DB::table('lang')->insert(['proglang' => 'PHP']);
    }
}
