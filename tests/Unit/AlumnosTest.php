<?php

namespace Tests\Unit;
use Mockery;
use App\Http\Controllers\Alumnos;
use Tests\TestCase;
use Routes\Api;

class AlumnosTest extends TestCase
{
    public function test_listaIsCalled()
    {
        $mockAlumnos = $this->getMockBuilder(Alumnos::class)->setMethods(['lista'])->getMock();
        $mockAlumnos->expects($this->once())->method('lista');
        
        // $this->get('alumnos');
        $mockAlumnos->callLista();
       
    }
}
