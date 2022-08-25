<?php
require '../includes/Banco.php';

$nome = $_POST['nome'];
$desc = $_POST['descricao'];
$imagem = $_POST['imagem'];
$preco = $_POST['preco'];
$categoria = $_POST['categoriaid'];

$sql = "INSERT INTO `produtos` (`ProdutoID`, `Nome`, `Descricao`, `Imagem`, `Preco`, `CategoriaID`, `Ativo`) VALUES (NULL, '{$nome}', '{$desc}', '{$imagem}', '{$preco}', '{$categoria}', '1');";

if(mysqli_query($conn, $sql)){
    header('Location: admin.php');
}else{
    echo "Error". $sql . "<br>" . mysqli_error($conn);
}