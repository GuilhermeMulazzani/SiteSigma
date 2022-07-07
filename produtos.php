<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
?>

<body>
  <div class="container">
    <h2>produtos</h2>
  <div class="row">
  <?php
  foreach ($produtos as $key=>$value) { 
    # code...
  
  ?>
  <div id="animais" class="card mt-5"  >
  <img class="card-img-top" src="./content/<?php echo $value['imagem']   ?>" alt="Imagem de capa do card">
  <div class="card-body">
    <h5 class="card-title"><?php echo $value['nome']; ?></h5>
    <p class="card-text"><?php echo $value['descricao'];?></p>
    <a href="produto-detalhe.php?id=<?php echo$value ?>" class="btn btn-primary">Visitar</a>
  </div>
</div>
<?php
  }
  ?>
    </div>
  </div>
</div>


<?php
// include do footer
include_once './includes/_footer.php';
?>