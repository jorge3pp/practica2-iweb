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
        $repo2 = DB::table('repositorios')->where('nombre','Repositorio publico')->first();
        $repo3 = DB::table('repositorios')->where('nombre','Repositorio publico 2')->first();
        $repo4 = DB::table('repositorios')->where('nombre','Repositorio publico 3')->first();
        
        DB::table('wiki')->insert(['id_repo' => $repo->id,'milestones' => 'Milestone 1.0',
            'clonelink' => "localhost:8000/repositorios/$repo->id/storage/descargararchivo/$repo->id", 'contenido' => 'Home de la pagina de IWebMola']);
    
        DB::table('wiki')->insert(['id_repo' => $repo2->id,'milestones' => 'Milestone 1.0',
            'clonelink' => "localhost:8000/repositorios/$repo2->id/storage/descargararchivo/$repo2->id", 'contenido' => 'Home de la pagina publica 1']);
    
        DB::table('wiki')->insert(['id_repo' => $repo3->id,'milestones' => 'Milestone 1.0',
            'clonelink' => "localhost:8000/repositorios/$repo3->id/storage/descargararchivo/$repo3->id", 'contenido' => 'Home de la pagina publica 2']);
        
            DB::table('wiki')->insert(['id_repo' => $repo4->id,'milestones' => 'Milestone 1.0',
            'clonelink' => "localhost:8000/repositorios/$repo4->id/storage/descargararchivo/$repo4->id", 'contenido' => 'Home de la pagina publica 3']);
    
        }
}
