<?php
// include do footer
include_once './includes/_head.php';
include_once './includes/_header.php';
include_once './includes/Banco.php';

$sql = "SELECT * FROM produtos WHERE Ativo = 1";
$res = mysqli_query($conn,$sql);
?>

<div class="container mt-5">
    <div class="row">
        <?php foreach($res as $produto):?>
            <div class="col-sm mb-5">
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