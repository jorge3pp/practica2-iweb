<?php
namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Cuartel;
use App\Agente;
use App\Denuncia;


class DenunciaTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testAssociationAgenteDenuncia()
    {
        $cuartel = new Cuartel();
        $cuartel->id = 5;
        $cuartel->nombre = 'Barcelona';
        $cuartel->save();

        $agente = new Agente();
        $agente->id = 3782;
        $agente->nombre = 'Pepito';
        
        $cuartel->agentes()->save($agente);
        $this->assertEquals($agente->cuartel->nombre, 'Barcelona');
        $this->assertEquals($cuartel->agentes[0]->nombre,'Pepito');

        $denuncia = new Denuncia();
        $denuncia->id = 4;
        $denuncia->denunciante = 5;
        $denuncia->denunciado = 6;
        $denuncia->tipo = 'Agresion';
        $denuncia->motivo = 'Esta persona es denunciada por agresion';

        $agente->denuncias()->save($denuncia);

        $this->assertEquals($denuncia->agente->id,3782);
        $this->assertEquals($agente->denuncias[0]->tipo,'Agresion');
        $this->assertEquals($cuartel->agentes[0]->denuncias[0]->id,4);
        $this->assertEquals($denuncia->agente->cuartel->nombre,'Barcelona');

        $cuartel->delete();
        $agente->delete();
        $denuncia->delete();
    }
}