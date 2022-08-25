<?php
// include do footer
include_once '../includes/_head.php';
include_once 'headeradm.php';
require '../includes/Banco.php'; //Conexao com o Banco
?>
<div class="container mt-5">
    <form action="realizarLogin.php" method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Usuário</label>
        <input type="text" class="form-control" name="user">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Senha</label>
        <input type="password" class="form-control" name="password">
    </div>

    <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
</div>