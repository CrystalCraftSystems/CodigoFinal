<?php


class ExibirUsuarioC{
  public function retornar(){
    
    $usuarios = (new UsuariosBanco())->listarUsuario();
    require __DIR__."/../Public/usuarios.php";
  }
}