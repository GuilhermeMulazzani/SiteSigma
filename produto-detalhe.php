<?php
// include do footer
include_once './includes/_head.php';
include_once './includes/_header.php';
include_once './includes/Banco.php';

$id = $_GET['id'];
$sql = "SELECT * FROM produtos WHERE Ativo = 1 AND ProdutoID = $id";
$res = mysqli_query($conn, $sql);
$produto = mysqli_fetch_assoc($res);
?>

<div class="container mt-2">
    <div class="produto">
        <div class="produto-img">
        <img src="<?= $produto['Imagem']?>">
        </div>
        <div class="produto-texto">
        <h2><?= $produto['Nome']?></h2>
        <p><?= $produto['Preco']?></p>
        <h4>Descrição</h4>
        <p><?= $produto['Descricao']?></p>

        <div class="produto-comprar">
            <a href="" class="btn btn-dark">COMPRAR</a>
        </div>
        </div>
    </div>
</div>


<?php
// include do footer
include_once './includes/_footer.php';
?>