<?php
use PHPUnit\Framework\TestCase;
use src\Paciente;

class PacienteTest extends TestCase{
    /** @test */
    public function is_null_documento(){
        $Paciente = new Paciente('1017221167','Andres Felipe','Martinez Arrieta');
        $this->assertFalse($Paciente->isNuloDoc());
    }

    /** @test */
    public function length_docu(){
        $Paciente = new Paciente('1017221167',NULL,NULL);
        $this->assertTrue($Paciente->isLongitud10());
    }

    /** @test */
    public function Es_alphaNumer(){
        $Paciente = new Paciente('1017221167',NULL,NULL);
        $this->assertTrue($Paciente->isAlphaNumber());
    }

    /** @test */
    public function Sin_solo_Ceros(){
        $Paciente = new Paciente('1017221167',NULL,NULL);
        $this->assertTrue($Paciente->Not_cero());
    }

    /** @test */
    public function isNotNull_name(){
        $Paciente = new Paciente(NULL,'Andres Felipe',NULL);
        $this->assertFalse($Paciente->isNullName());
    }

    /** @test */
    public function isNotNull_Lastname(){
        $Paciente = new Paciente(NULL,NULL,'Martinez Arrieta');
        $this->assertFalse($Paciente->isNulllastName());
    }

    /** @test */
    public function TodoCorrecto(){
        $Paciente = new Paciente('1017221167','Andres Felipe','Martinez Arrieta');
        return $this->assertTrue($Paciente->TestIntegration());
    }
}
