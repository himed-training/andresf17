<?php

namespace src;

class Paciente{
    private $nombre;
    private $apellido;
    private $documento;

    public function __construct($id,$nombres,$apellidos){
        $this->documento = $id;
        $this->nombre = $nombres;
        $this->apellido = $apellidos;
    }

    public function __SET($a,$v){
        return $this->$a=$v;
    }

    public function __GET($a){
        return $this->$a;
    }

    public function isAlphaNumber(){
        return (ctype_alnum($this->documento)) ? true : false;
    }

    public function isLongitud10(){
        return (strlen($this->documento)<=10) ? true : false;
    }
    
    public function isNuloDoc(){
        return is_null($this->documento);
    }

    public function Not_cero(){
        return ($this->documento!="0000000000") ? true : false;
    }

    public function isNullName(){
        return is_null($this->nombre);
    }

    public function isNulllastName(){
        return is_null($this->apellido);
    }

    public function TestIntegration(){
        return ($this->isAlphaNumber() && $this->isLongitud10() && !$this->isNuloDoc()
        && $this->Not_cero() && !$this->isNullName() && !$this->isNulllastName()) ? true : false;
    }
}
