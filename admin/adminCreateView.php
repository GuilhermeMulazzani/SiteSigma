<?php
// include do footer
include_once '../includes/_head.php';
include_once 'headeradm.php';
require '../includes/Banco.php'; //Conexao com o Banco


?>

<div class="container mt-5">
    <form class="form-group" action="adminCreate.php" method="post">
        <label for="nome">Nome</label>
        <input class="form-control" type="text" name="nome" placeholder="Nome">
        <label for="nome">Descrição</label>
        <input class="form-control" type="text" name="descricao" placeholder="Descrição">
        <label for="nome">Imagem</label>
        <input class="form-control" type="text" name="imagem" placeholder="Imagem">
        <label for="nome">Preço</label>
        <input class="form-control" type="text" name="preco" placeholder="Preço">
        <label for="nome">CategoriaID</label>
        <input class="form-control" type="text" name="categoriaid" placeholder="CategoriaID">

        <input class="btn btn-primary mt-3" type="submit" name="submit" value="Criar">
    </form>
</div>


<?php
// include do footer
include_once '../includes/_footer.php';
?>