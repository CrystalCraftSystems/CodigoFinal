<?php


class ExibirUsuario{
  public function retornar(){
    
    $usuarios = (new UsuariosBanco())->listarUsuario();
    require __DIR__."/../Public/usuariosAdm.php";
  }
}