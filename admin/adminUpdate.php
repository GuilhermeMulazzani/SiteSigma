<?php
require '../includes/Banco.php';

$id = $_GET['id'];

$nome = $_POST['nome'];
$desc = $_POST['descricao'];
$imagem = $_POST['imagem'];
$preco = $_POST['preco'];
$categoria = $_POST['categoriaid'];

$sql = "UPDATE produtos SET Nome = '{$nome}', Descricao = '{$desc}', Imagem = '{$imagem}', Preco = '{$preco}', CategoriaID = '{$categoria}' WHERE produtos.ProdutoID = $id";

if(mysqli_query($conn, $sql)){
    header('Location: admin.php');
}else{
    echo "Error". $sql . "<br>" . mysqli_error($conn);
}