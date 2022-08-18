<?php
    // conexao.com o banco de dados
    include_once '../includes/_dados.php';

    // captura a acao do usuario
    $acao = $_REQUEST['acao'];
    // codigo da categoria
    $id = $_REQUEST['id'];

switch ($acao){
    // acao de excluir dados
    case 'excluir':

        // monta a SQL que exclui os registros 
        $sql = "DELETE FROM categorias WHERE CategoriasID = ".$id;

        // executa o comando de excluir
        mysqli_query($conexao, $sql);

        // redireciona a pagina
        header('location: ./categoria-lista.php');

        break;

    case 'salvar':
        //captura os dados
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];

        if ($_FILES['foto']['size'] > 0){
            //pasta que armazena o arquivo
            $uploaddir = '.../imagens/categorias/';
            $extensao = pathinfo ($_FILES['foto']['name'], PATHINFO_EXTENSION);
            $nomearquivo = 'categorias-'.$id.'-'.rand().'.'.$extensao;
            $uploadfile = $uploaddir . $nomearquivo;
            move_uploaded_file($_FILES['foto']['tmp_name'], $uploadfile);
        }else{
            $nomearquivo = $_POST['imagem'];
        }

        //monta o sql conforme informa o id
        if (!isset($_POST['id']) || empty($_POST['id'])) {
            //comando SQL do banco de dados que inclui um registro
            $sql = "INSERT INTO `categorias`(`Nome`, `Descricao`)VALUES('".$nome."','".$descricao."')";
        }else{
            // comando SQL do banco de dados que atualiza um registro
            $sql = "UPDATE `categorias` SET `Nome`='".$nome"', `Descricao`'".$descricao."' WHERE `CategoriasID`='".$id."' ";
        }

        // executa o comando de excluir
        mysqli_query($conexao, $sql);

        // redireciona a pagina
        header('location: ./categoria-lista.php');
        break;
    }
