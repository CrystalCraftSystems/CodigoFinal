<?php


class ExibirMoradorC{
  public function retornar(){
    
    $moradores = (new MoradoresBanco())->listarMorador();
    require __DIR__."/../Public/moradores.php";
  }
}