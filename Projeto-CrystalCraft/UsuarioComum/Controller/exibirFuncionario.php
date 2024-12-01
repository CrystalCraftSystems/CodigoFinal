<?php


class ExibirFuncionarioC{
  public function retornar(){
    
    $funcionarios = (new FuncionariosBanco())->listarFuncionario();
    require __DIR__."/../Public/funcionarios.php";
  }
}