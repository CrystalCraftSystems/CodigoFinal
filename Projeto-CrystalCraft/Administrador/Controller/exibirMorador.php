<?php


class ExibirMorador{
  public function retornar(){
    
    $moradores = (new MoradoresBanco())->listarMorador();
    require __DIR__."/../Public/moradoresAdm.php";
  }
}