<?php
// include do footer
include_once './includes/_banco.php';
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
 //$id= $_GET['id']; ?>

  <body>
  <div class="container">
    <h2>promoção</h2>
  <div class="row mt-5">
  <?php
$sql = "SELECT * FROM produtos WHERE Ativo = 1 LIMIT 3";

$exec = mysqli_query($conn,$sql);

$numProdutos = mysqli_num_rows($exec);

while ( $dados = mysqli_fetch_assoc($exec) )  
?>
  <div class="card mt-3" style="width: 18rem;">
  <img src="./content/<?php echo $dados['Imagem']   ?>" alt="Imagem de capa do card">
  <div class="card-body">
    <h5 class="card-title"><?php echo $dados['Nome']; ?></h5>
    <p class="card-text"><?php echo $dados['Descricao'];?></p>
    <a href="produto-detalhe.php?id=<?php echo$dados['ProdutoID']; ?>&tipo=promocao" class="btn btn-primary">Visitar</a>
  </div>
</div>
<?php
  
  ?>
    </div>
  </div>
</div>
<?php
// include do foot''er
include_once './includes/_footer.php';
?> 

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>