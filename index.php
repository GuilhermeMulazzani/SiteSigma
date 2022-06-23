<?php
// include do footer
include_once 'includes/_head.php';
include_once 'includes/_header.php';
include_once 'dados.php';
?>

<div class="container">
    <div class="row m-3" id="cards">
        <?php
        //laço de repeticao, vai exibir os 3 primeiros produtos
        for ($i=0; $i < 3; $i++) { 
        
        ?>
        <div class="card" style="width: 18rem;">
        <img src="<?php echo $produtos[$i]['imagem'];?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $produtos[$i]['nome'];?></h5>
            <p class="card-text"><?php echo $produtos[$i]['descricao'];?></p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        </div>
        <?php
        } // <-- fechando o for aqui
        ?>
    </div>
</div>


<?php
// include do footer
include_once './includes/_footer.php';
?>