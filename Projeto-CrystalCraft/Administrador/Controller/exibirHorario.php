<?php


class ExibirHorario{
  public function retornar(){
    
    $registros = (new HorariosBanco())->listarHorario();
    require __DIR__."/../Public/horariosAdm.php";
  }
}