<?php

namespace src;

class Consulta{
    private $Tipo_paciente;
    private $Tipo_fecha;

    public function __construct($fecha,$paciente){
        if ($fecha!="" && $paciente!="") {
            $this->Tipo_fecha = $fecha;
            $this->Tipo_paciente = $paciente;
        }
    }

    public function __SET($a,$v){
        return $this->$a=$v;
    }

    public function __GET($a){
        return $this->$a;
    }

    public function Integracion_correcta(){
        return (is_null($this->Tipo_paciente)==false && is_null($this->Tipo_fecha)==false) ? true : false;
    }
}
