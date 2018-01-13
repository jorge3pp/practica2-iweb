<?php

use Illuminate\Database\Seeder;

class WikiPagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('wiki_pages')->delete();
        
        $repo = DB::table('repositorios')->where('nombre','IngenieriaWeb Mola')->first();
        $wiki = DB::table('wiki')->where('id_repo',$repo->id)->first();
                
        DB::table('wiki_pages')->insert(['nombre' => 'Pagina 1','contenido' => 'Prueba 1 de que funcionan las super paginas',
            'id_wiki' => $wiki->id]);
    }
}