<?php


class ExibirFuncionario{
  public function retornar(){
    
    $funcionarios = (new FuncionariosBanco())->listarFuncionario();
    require __DIR__."/../Public/funcionariosAdm.php";
  }
}