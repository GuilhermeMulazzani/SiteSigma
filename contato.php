<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';

?>


<div id="inputs-for-contacts" class="container">
<h1 id="contato">Contato</h1>

<form action="./contato.php" method="post">
  <div class="form-group">
    <label for="formGroupExampleInput">Nome Completo</label>
    <input type="text" class="form-control" name="txtNome" id="txtNome" placeholder="Nome Completo">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">E-mail</label>
    <input type="text" class="form-control" name="txtEmail" id="txtEmail" placeholder="E-mail">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Telefone</label>
    <input type="text" class="form-control" name="txtTelefone" id="txtTelefone" placeholder="Telefone">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Mensagem</label>
    <input type="text" class="form-control"  name="txtMensagem" id="txtMensagem">
  </div>
 
  <input id="cadastrar" type="submit" value="Cadastrar">
</form>
</div>


<?php
if (isset ( $_POST['txtNome']) ) {
    $nome = strtoupper( $_POST['txtNome']);
    $nome = $_POST['txtNome'];
    $email = $_POST['txtEmail'];
    $telefone = $_POST['txtTelefone'];
    $mensagem = $_POST['txtMensagem'];
    echo $nome. "<br>". $email."<br>". $telefone."<br>". $mensagem;
}

include_once './includes/_footer.php';
?>