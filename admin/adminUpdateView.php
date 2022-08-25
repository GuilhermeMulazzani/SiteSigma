<?php
// include do footer
include_once '../includes/_head.php';
include_once 'headeradm.php';
require '../includes/Banco.php'; //Conexao com o Banco

$id = $_GET['id'];
$sql = "SELECT * FROM produtos WHERE Ativo = 1 AND ProdutoID = $id";
$res = mysqli_query($conn, $sql);
$produto = mysqli_fetch_assoc($res);

?>

<div class="container mt-5">
    <form class="form-group" action="adminUpdate.php?id=<?=$id?>" method="post">
        <label for="nome">Nome</label>
        <input class="form-control" type="text" name="nome" placeholder="Nome" value="<?= $produto['Nome']?>">
        <label for="nome">Descrição</label>
        <input class="form-control" type="text" name="descricao" placeholder="Descrição" value="<?= $produto['Descricao']?>">
        <label for="nome">Imagem</label>
        <input class="form-control" type="text" name="imagem" placeholder="Imagem" value="<?= $produto['Imagem']?>">
        <label for="nome">Preço</label>
        <input class="form-control" type="text" name="preco" placeholder="Preço" value="<?= $produto['Preco']?>">
        <label for="nome">CategoriaID</label>
        <input class="form-control" type="text" name="categoriaid" placeholder="CategoriaID" value="<?= $produto['CategoriaID']?>">

        <input class="btn btn-primary mt-3" type="submit" name="submit" value="Atualizar">
    </form>
</div>


<?php
// include do footer
include_once '../includes/_footer.php';
?>