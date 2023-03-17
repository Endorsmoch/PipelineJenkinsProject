<?php

namespace Tests\Unit;
use Mockery;
use App\Http\Controllers\Alumnos;
use Tests\TestCase;

class AlumnosTest extends TestCase
{
    public function test_listaIsCalled()
    {
        //Se crea la instancia del Mock
        $mockAlumnos = $this->getMockBuilder(Alumnos::class)->setMethods(['lista'])->getMock();
        //Se establece lo esperado de la prueba. Ejecutar una sola vez el método lista.
        $mockAlumnos->expects($this->once())->method('lista');
        
        //$this->get('/api/alumnos');
        $mockAlumnos->callLista();
       
    }
}
