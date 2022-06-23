<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
?>

<h1>Produto Detalhe</h1>
<div class="card" style="width: 18rem;">
        <img src="<?php echo $produtos[$i]['imagem'];?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $produtos[$i]['nome'];?></h5>
            <p class="card-text"><?php echo $produtos[$i]['descricao'];?></p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        </div>

<?php
// include do footer
include_once './includes/_footer.php';
?>