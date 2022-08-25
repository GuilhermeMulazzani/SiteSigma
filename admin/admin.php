<?php
// include do footer
include_once '../includes/_head.php';
include_once 'headeradm.php';
require '../includes/Banco.php'; //Conexao com o Banco
session_start();
$logado = $_SESSION['logado'];
if($logado != 'logado'){
    header('Location: ./login.php');
}

// $sql = "SELECT * FROM produtos WHERE Ativo = 1";
$sql = "SELECT p.ProdutoId AS PId, p.Nome AS Nome, p.Preco AS Preco, c.CategoriaID AS CategoriaID, c.Nome AS CategoriaNome FROM produtos p INNER JOIN categorias c ON p.CategoriaID = c.CategoriaID";
$res = mysqli_query($conn, $sql);
?>

<div class="container mt-5">
    <a href="adminCreateView.php" class="btn btn-primary">Criar Produto</a>
    <table class="table mt-2">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Preco</th>
        <th scope="col">Categoria</th>
        <th scope="col">Admin</th>
        </tr>
    </thead>    
    <tbody>
    <?php foreach($res as $produto):?>
        <tr>
        <th scope="row"><?= $produto['PId']?></th>
        <td><?= $produto['Nome']?></td>
        <td><?= $produto['Preco']?></td>
        <td><?= $produto['CategoriaNome']?></td>
        <td><a href="adminUpdateView.php?id=<?=$produto['PId']?>" class="btn btn-success m-1">Editar</a><a href="adminDelete.php?id=<?=$produto['ProdutoID']?>" class="btn btn-danger m-1">Excluir</a></span></td>
        </tr>
    <?php endforeach ?>
    </tbody>
    </table>
</div>


<?php
// include do footer
include_once '../includes/_footer.php';
?>