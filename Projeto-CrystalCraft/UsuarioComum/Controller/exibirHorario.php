<?php


class ExibirHorarioC{
  public function retornar(){
    
    $registros = (new HorariosBanco())->listarHorario();
    require __DIR__."/../Public/horarios.php";
  }
}