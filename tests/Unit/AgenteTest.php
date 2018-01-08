<?php
namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Cuartel;
use App\Agente;


class AgenteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testAssociationAgenteCuartel()
    {
        $cuartel = new Cuartel();
        $cuartel->id = 4;
        $cuartel->nombre = 'Madrid';
        $cuartel->save();

        $agente = new Agente();
        $agente->id = 7394;
        $agente->nombre = 'Jose Antonio Sanchis Rives';
        $cuartel->agentes()->save($agente);

        $this->assertEquals($agente->cuartel->nombre, 'Madrid');
        $this->assertEquals($cuartel->agentes[0]->nombre, 'Jose Antonio Sanchis Rives');

        $cuartel->delete();
        $agente->delete();
    }
}