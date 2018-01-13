<?php

use Illuminate\Database\Seeder;

class WikiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('wiki')->delete();

        $repo = DB::table('repositorios')->where('nombre','IngenieriaWeb Mola')->first();
        
        DB::table('wiki')->insert(['id_repo' => $repo->id,'milestones' => 'Milestone 1.0',
            'clone-link' => 'linkgitclone', 'contenido' => 'Home de la pagina de pepote']);
    }
}
