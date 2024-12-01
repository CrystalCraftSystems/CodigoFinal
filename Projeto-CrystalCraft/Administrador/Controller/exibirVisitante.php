<?php


class ExibirVisitante{
  public function retornar(){
    
    $visitantes = (new VisitantesBanco())->listarVisitanteMorador();
    require __DIR__."/../Public/visitantesAdm.php";
  }
}