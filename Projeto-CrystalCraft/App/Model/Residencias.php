<?php

class Residencias{

    public string $idResidencia;
    private int $numResidencia;
    private string $bloco;
    private string $descricaoResidencia;
    

  

    public function getIdResidencia():string
    {
        return $this->idResidencia;
    }

    public function setIdResidencia(string $idResidencia)
    {
        $this->idResidencia = $idResidencia;
    }

    public function getNumResidencia():int
    {
        return $this->numResidencia;
    }

    public function setNumResidencia(int $numResidencia)
    {
        $this->numResidencia = $numResidencia;
    }
 
    public function getBloco():string
    {
        return $this->bloco;
    }

    public function setBloco(string $bloco)
    {
        $this->bloco = $bloco;
    }

    public function getDescricaoResidencia()
    {
        return $this->descricaoResidencia;
    }
 
    public function setDescricaoResidencia($descricaoResidencia)
    {
        $this->descricaoResidencia = $descricaoResidencia;

    }
}

?>