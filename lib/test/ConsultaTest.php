<?php

use PHPUnit\Framework\TestCase;
use src\Consulta;
use src\Paciente;
use src\Fecha_ingresada;

class ConsultaTest extends TestCase{
    /** @test */
    public function Is_null_paciente(){
        $fecha = new Fecha_ingresada('12/10/2020');
        $paciente = new Paciente('101722',"Andres","Martinez");
        $consulta = new Consulta($fecha->__GET("fecha"),$paciente->__GET("documento"));
        return $this->assertTrue($consulta->Integracion_correcta());
    }
}
