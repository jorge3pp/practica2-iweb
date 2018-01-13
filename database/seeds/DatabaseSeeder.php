<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CuartelTableSeeder::class);
        $this->command->info('Seeder de Cuartel ejecutado');

        $this->call(UserTableSeeder::class);
        $this->command->info('Seeder de User ejecutado');

        $this->call(RepositoriosSeeder::class);
        $this->command->info('Seeder de Repositorios ejecutado');

        $this->call(IssueSeeder::class);
        $this->command->info('Seeder de Issues ejecutado');

        $this->call(PullSeeder::class);
        $this->command->info('Seeder de Pull Requests ejecutado');



        $this->call(ListaUsuariosRepoSeeder::class);
        $this->command->info('Seeder de ListaUsuariosRepo ejecutado');
    }
}
