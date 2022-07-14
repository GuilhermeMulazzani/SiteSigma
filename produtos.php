<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
?>

<div class="conteiner">
   <h2>Produtos</h2>
   <div class="row m-3">
   <?php 
   foreach ($produtos as $key => $value) {
   ?>
   <div class="card" style="width: 18rem; margin-right:1cm; margin-top: 1cm; margin-left:2cm;">
     <img class="card-img-top" style='height: 250px;'src="./content/<?php echo $value['imagem'];?>" alt="Card image cap">
      <div class="card-body">
       <h5 class="card-title"><?php echo $value['nome']; ?></h5>
       <p class="card-text"><?php echo $value['descricao']; ?></p>
       <a href="produto-detalhe.php?id=<?php echo $key;?>&tipo=promocao" class="btn btn-primary">Comprar</a>
      </div>
   </div>
   <?php
   }
   ?> 
   </div>
</div>

<?php
// include do footer
include_once './includes/_footer.php';
?>