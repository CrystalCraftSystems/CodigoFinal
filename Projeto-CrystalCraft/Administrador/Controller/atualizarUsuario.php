<?php


class AtualizarUsuario
{
    public function retornar()
    {


        $atualizar = (new UsuariosBanco())->atualizarUsuario($_POST['idUsuario'], $_POST['nomeUsuario'],$_POST['senha'],$_POST['emailUsuario'],$_POST['cpfUsuario'],$_POST['dataNascimentoUsuario'],$_POST['permissaoEspecial']);




        if (empty($atualizar)) {
            die("Não foi possível atualizar o usuário");
        }

        $mensagem = '
    <div class="notification is-success">
        <button class="delete"></button>
            Usuário atualizado!
    </div>
    <a href="./index.php?menu=usuariosAdm" class="button is-black is-rounded is-medium is-fullwidth">Voltar!</a>';
        echo $mensagem;
        }
}