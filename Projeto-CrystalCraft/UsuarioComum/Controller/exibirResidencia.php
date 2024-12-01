<?php


class ExibirResidenciaC{
  public function retornar(){
    
    $residencias = (new ResidenciasBanco())->listarResidencia();
    require __DIR__."/../Public/residencias.php";
  }
}