<?php
// include do footer
include_once './includes/_head.php';
include_once './includes/_header.php';
include_once './includes/_dados.php';
require './includes/Banco.php'; //Conexao com o Banco
//session_start();
$sql = "SELECT * FROM produtos WHERE ativo = 1 LIMIT 10";
$res = mysqli_query($conn, $sql);

?>

<div class="container mt-5">
    <div class="row">

        <?php foreach($res as $produto):?>

            <div class="col-sm">
            <a href="produto-detalhe.php?id=<?=$produto['ProdutoID']?>">
                    <div class="card" style="width: 18rem;">
                        <img src=" <?= $produto['Imagem']?> " class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"> <?= $produto['Nome']?> </h5>
                            <p class="card-text"> <?= $produto['Preco']?> </p>
                        </div>
                    </div>
                </a>
            </div>

        <?php endforeach ?>

    </div>
</div>

<?php
// include do footer
include_once './includes/_footer.php';
?>