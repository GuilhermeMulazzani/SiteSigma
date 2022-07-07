

<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
?>
<div class"container">
<h1>Produto Detalhe</h1>
</div>

<?php
$id= $_GET [ 'id' ];
$tipo=$_GET['tipo'];
?>
<div id="detalhe" class="container">
    <div id="produto-detalhe">
<h3><?php echo $produtos[$id]['nome'] ?></h1>
<img  src="./content/<?php echo $produtos[$id]['imagem']   ?>" alt="Imagem de capa do card">
<div class="card-body">
    
    <p class="card-text"><?php echo $produtos[$id]['descricao'];?></p>
    <h4>R$ <?php  echo $produtos[$id]['preco']; ?></h4>
    <div class="row">
        <div class="col"><button class="btn btn-danger"><a href="index.php">voltar</a></button> </div>
        <div class="col"> <button class="btn btn-success"><a href="#">comprar</a></button> </div>
        
    <div>
    
  </div>
  </div>
  </div> 


<?php
// include do footer
include_once './includes/_footer.php';
?>