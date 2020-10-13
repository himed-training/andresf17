<?php
use PHPUnit\Framework\TestCase;
use src\Fecha_ingresada;

class FechaTest extends TestCase{
    //private $valor = "29/02/2000";

	public function testFechaSlash()
    {
    	$fecha = "29/02/2000";
        $objFecha = new Fecha_ingresada($fecha);
        
        $this->assertTrue($objFecha->fechaCantidadSlash($fecha));
    }

    public function testlongitudTexto()
    {    	
        $fecha = "29/02/2000";
        $objFecha = new Fecha_ingresada($fecha);
        $this->assertTrue($objFecha->fechaLongitud($fecha));
    }

    public function testCantidadNumerosSegunPosicion0()
    {        
        $fecha = "29/02/2000";
        $objFecha = new Fecha_ingresada($fecha);
        $this->assertTrue($objFecha->cantidadNumerosSegunPosicion(0, 2, $fecha));
    }    

    public function testCantidadNumerosSegunPosicion1()
    {
        $fecha = "29/02/2000";
        $objFecha = new Fecha_ingresada($fecha);
        $this->assertTrue($objFecha->cantidadNumerosSegunPosicion(1, 2, $fecha));        
    }

    public function testCantidadNumerosSegunPosicion2()
    {
        $fecha = "29/02/2000";
        $objFecha = new Fecha_ingresada($fecha);
        $this->assertTrue($objFecha->cantidadNumerosSegunPosicion(2, 4, $fecha));
    }

    public function testValidarMesCorrecto()
    {
        $fecha = "29/02/2000";
        $objFecha = new Fecha_ingresada($fecha);
        $this->assertTrue($objFecha->validarMesCorrecto($fecha));        
    }

    public function testDiaCorrectoSegunMes(){
        $fecha = "29/02/2000";
        $objFecha = new Fecha_ingresada($fecha);
        $this->assertTrue($objFecha->diaCorrectoSegunMes($fecha));
    }

    public function testBisiesto(){
        $fecha = "29/02/2000";
        $objFecha = new Fecha_ingresada($fecha);
        $this->assertTrue($objFecha->bisiesto($fecha));
    }

    public function testTodosLosNumerosMayoresCero(){
        $fecha = "29/02/2000";
        $objFecha = new Fecha_ingresada($fecha);
        $this->assertTrue($objFecha->todosLosNumerosMayoresCero($fecha));
    }

    public function testFechaFormato(){
        $fecha = "29/02/2000";
        $objFecha = new Fecha_ingresada($fecha);
        $this->assertTrue($objFecha->fechaFormato($fecha));
    }

    public function testFechaEsValida(){
        $fecha = "29/02/2000";
        $objFecha = new Fecha_ingresada($fecha);
        return $this->assertTrue($objFecha->fechaEsValida($fecha));
    }
}
