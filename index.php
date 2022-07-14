<?php
include_once './includes/_banco.php';
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
?>


<div class="conteiner" id="index">
   <h2>Promoção</h2>
   <div class="row m-3">
   <?php 
 
   $sql = "SELECT * from categorias where Ativo = 1";

   $exec = mysqli_query($conn, $sql);

   $numProdutos = mysqli_num_rows($exec);
 
   while ($dados = mysqli_fetch_assoc($exec)){
     echo '<h1>'.$dados ['Nome']. '</h1>';
   }

   for ($i=0; $i < 6; $i++) {
   ?>
   <div class="card" style="width: 18rem; margin-right:1cm; margin-top: 1cm; margin-left:2cm;">
     <img class="card-img-top" style='height: 250px;'src="./content/<?php echo $produtos[$i]['imagem'];?>" alt="Card image cap">
      <div class="card-body">
       <h5 class="card-title"><?php echo $produtos[$i]['nome']; ?></h5>
       <p class="card-text"><?php echo $produtos[$i]['descricao']; ?></p>
       <a href="produto-detalhe.php?id=<?php echo $i;?>&tipo=promocao" class="btn btn-primary">Comprar</a>
      </div>
   </div>
   <?php
   }
   ?> 
   </div>
</div>


<?php
include_once './includes/_footer.php';
?>