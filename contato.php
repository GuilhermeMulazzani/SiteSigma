<?php
// include do footer
include_once './includes/_head.php';
include_once './includes/_header.php';
require './includes/Banco.php';

if(isset($_POST['submit'])){
    $nome = $_POST['txtNome'];
    $email = $_POST['txtEmail'];
    $telefone = $_POST['txtTelefone'];
    $mensagem = $_POST['txtMsg'];

    $sql = "INSERT INTO contato VALUES (NULL, '{$nome}','{$email}','{$telefone}','{$mensagem}')";
    
    if(mysqli_query($conn, $sql)){
        header('Location: contato.php');
    }else{
        echo "Error" . $sql . "<br" . mysqli_error($conn);
    }
}

?>

<h1>Contato</h1>

<div class="container">
<form action="contato.php" method="post" id="form">
    <label for="txtNome">Nome</label>
    <input tpye="text" name="txtNome" id="txtNome">
    <label for="txtEmail">E-mail</label>
    <input tpye="text" name="txtEmail" id="txtEmail">
    <label for="txtTelefone">Telefone</label>
    <input tpye="text" name="txtTelefone" id="txtTelefone">
    <label for="txtMsg">Mensagem</label>
    <textarea name="txtMsg" id="txtMsg"></textarea>


    <input type="submit" name="submit" value="Enviar" id="submit">
</form>
</div>

<?php
// include do footer
include_once './includes/_footer.php';
?>