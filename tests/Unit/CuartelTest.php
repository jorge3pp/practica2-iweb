<?php
namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Cuartel;


class CuartelTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCoincideCodconNombreCuartel()
    {
        //$sponsor = Sponsor::where('name', 'Samsung')->first();
        //$this->assertTrue($sponsor->isJuniorSponsor());

        $cuartel = Cuartel::where('nombre','Alicante')->first();
        $this->assertEquals($cuartel->id,1);
        $cuartel = Cuartel::where('nombre','Valencia')->first();
        $this->assertEquals($cuartel->id,2);
        $cuartel = Cuartel::where('nombre','Castellon')->first();
        $this->assertEquals($cuartel->id,3);


    }
}