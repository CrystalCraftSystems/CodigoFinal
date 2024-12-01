<?php


class ExibirVisitanteC{
  public function retornar(){
    
    $visitantes = (new VisitantesBanco())->listarVisitanteMorador();
    require __DIR__."/../Public/visitantes.php";
  }
}