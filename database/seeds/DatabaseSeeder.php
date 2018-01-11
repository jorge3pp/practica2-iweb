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

        $this->call(AgenteTableSeeder::class);
        $this->command->info('Seeder de Agente ejecutado');

        $this->call(DenunciaTableSeeder::class);
        $this->command->info('Seeder de Denuncia ejecutado');

        $this->call(TareaTableSeeder::class);
        $this->command->info('Seeder de Tarea ejecutado');

        //$this->call(Agente_TareaTableSeeder::class);
        $this->command->info('Seeder de Agente_Tarea ejecutado');

        $this->call(Denuncia_UserTableSeeder::class);
        $this->command->info('Seeder de Denuncia_User ejecutado');

        $this->call(UsuariosSeeder::class);
        $this->command->info('Seeder de Usuarios ejecutado');

        $this->call(RepositoriosSeeder::class);
        $this->command->info('Seeder de Repositorios ejecutado');

        $this->call(ListaUsuariosRepoSeeder::class);
        $this->command->info('Seeder de ListaUsuariosRepo ejecutado');
    }
}
