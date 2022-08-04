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

        //monta o sql conforme informa o id
        if (!isset($_POST['id']) || empty($_POST['id'])) {
            //comando SQL do banco de dados que inclui um registro
            $sql = "INSERT INTO `categorias`(`Nome`, `Descricao`)VALUES('".$nome."','".$descricao."')";
        }        
?>

