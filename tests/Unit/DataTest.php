<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Cuartel;
use App\Agente;
use App\Denuncia;

class DataTest extends TestCase
{
    /**
    * Checks the codigo and name of the cuarteles
    *  
    * @return void
    */
    public function testCuartelData(){
        $count = Cuartel::all()->count();
        $this->assertEquals($count,3);

        $this->assertDatabaseHas('cuartels', ['id' => 1,'nombre' => 'Alicante']);
        $this->assertDatabaseHas('cuartels', ['id' => 2,'nombre' => 'Valencia']);
        $this->assertDatabaseHas('cuartels', ['id' => 3,'nombre' => 'Castellon']);
    }

    public function testAgenteData(){
        $count = Agente::all()->count();
        $this->assertEquals($count,12);

        $cuartel = Cuartel::where('nombre','Alicante')->first();

        $this->assertDatabaseHas('agentes',['id' => 7139,'nombre' => 'Pedro Antonio Moya','cuartel_id' => $cuartel->id]);
        $this->assertDatabaseHas('agentes',['id' => 2675,'nombre' => 'Jorge Garcia Serrano','cuartel_id' => $cuartel->id]);
        $this->assertDatabaseHas('agentes',['id' => 5134,'nombre' => 'Jorge Poveda','cuartel_id' => $cuartel->id]);
        $this->assertDatabaseHas('agentes',['id' => 4728,'nombre' => 'Placido Antonio Lopez Avila','cuartel_id' => $cuartel->id]);

        $cuartel = Cuartel::where('nombre','Valencia')->first();

        $this->assertDatabaseHas('agentes',['id' => 8139,'nombre' => 'Pedro Moya','cuartel_id' => $cuartel->id]);
        $this->assertDatabaseHas('agentes',['id' => 3675,'nombre' => 'Jorge Garcia','cuartel_id' => $cuartel->id]);
        $this->assertDatabaseHas('agentes',['id' => 6134,'nombre' => 'Jorge Poveda','cuartel_id' => $cuartel->id]);
        $this->assertDatabaseHas('agentes',['id' => 5728,'nombre' => 'Placido Lopez','cuartel_id' => $cuartel->id]);

        $cuartel = Cuartel::where('nombre','Castellon')->first();

        $this->assertDatabaseHas('agentes',['id' => 6139,'nombre' => 'Juan Rodriguez','cuartel_id' => $cuartel->id]);
        $this->assertDatabaseHas('agentes',['id' => 1675,'nombre' => 'Jorge Morenilla','cuartel_id' => $cuartel->id]);
        $this->assertDatabaseHas('agentes',['id' => 4134,'nombre' => 'Manuel Poveda','cuartel_id' => $cuartel->id]);
        $this->assertDatabaseHas('agentes',['id' => 3728,'nombre' => 'Antonio Garrido','cuartel_id' => $cuartel->id]);
    }

    public function testDenunciaData(){
        $count = Denuncia::all()->count();
        $this->assertEquals($count,3);

        $agente = Agente::where('id',4728)->first();
        $this->assertDatabaseHas('denuncias',['id' => 1, 'denunciante' => 1,'denunciado' => 2,'tipo' => 'Robo','motivo' => 'Esta persona es denunciada por robar pertenencias ajenas.','agente_id' => $agente->id]);
        
        $agente = Agente::where('id',7139)->first();
        $this->assertDatabaseHas('denuncias',['id' => 2,'denunciante' => 2,'denunciado' => 3,'tipo' => 'Asesinato','motivo' => 'Esta persona es denunciada por asesinar a una persona por arma blanca.','agente_id' => $agente->id]);
        
        $agente = Agente::where('id',5134)->first();
        $this->assertDatabaseHas('denuncias',['id' => 3,'denunciante' => 3,'denunciado' => 1,'tipo' => 'Maltrato','motivo' => 'Esta persona es denunciada por maltratar animales.','agente_id' => $agente->id]);
    }
    /**
    * Checks the codigo and name of the cuarteles
    *  
    * @return void
    */
    public function testAgentebyCuartel(){
        $cuartel = Cuartel::where('nombre','Alicante')->first();
        $this->assertEquals($cuartel->agentes->count(),4);

        $this->assertTrue($cuartel->agentes->contains('nombre', 'Pedro Antonio Moya'));
        $this->assertTrue($cuartel->agentes->contains('nombre', 'Jorge Garcia Serrano'));
        $this->assertTrue($cuartel->agentes->contains('nombre', 'Jorge Poveda'));
        $this->assertTrue($cuartel->agentes->contains('nombre', 'Placido Antonio Lopez Avila'));

        $cuartel = Cuartel::where('nombre','Valencia')->first();
        $this->assertEquals($cuartel->agentes->count(),4);

        $this->assertTrue($cuartel->agentes->contains('nombre', 'Pedro Moya'));
        $this->assertTrue($cuartel->agentes->contains('nombre', 'Jorge Garcia'));
        $this->assertTrue($cuartel->agentes->contains('nombre', 'Jorge Poveda'));
        $this->assertTrue($cuartel->agentes->contains('nombre', 'Placido Lopez'));

        $cuartel = Cuartel::where('nombre','Castellon')->first();
        $this->assertEquals($cuartel->agentes->count(),4);

        $this->assertTrue($cuartel->agentes->contains('nombre', 'Juan Rodriguez'));
        $this->assertTrue($cuartel->agentes->contains('nombre', 'Jorge Morenilla'));
        $this->assertTrue($cuartel->agentes->contains('nombre', 'Manuel Poveda'));
        $this->assertTrue($cuartel->agentes->contains('nombre', 'Antonio Garrido'));

    }

    /**
    * Checks the denuncia by Agente
    *  
    * @return void
    */
    public function testDenuciabyAgente(){
        $agente = Agente::where('id',4728)->first();
        $this->assertEquals($agente->denuncias->count(),1);
        $this->assertTrue($agente->denuncias->contains('id', 1));

        $agente = Agente::where('id',7139)->first();
        $this->assertEquals($agente->denuncias->count(),1);
        $this->assertTrue($agente->denuncias->contains('id', 2));
        
        $agente = Agente::where('id',5134)->first();
        $this->assertEquals($agente->denuncias->count(),1);
        $this->assertTrue($agente->denuncias->contains('id', 3));
        
    }
}
