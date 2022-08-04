<?php
$produtos= array(
    0=> array('nome'=>'Cavaliers Shirt','preco'=>' 312,00','descricao'=>' The Best Ever','imagem'=>'cavaliersregata.webp'),
    1=> array('nome'=>'Lakers Shirt','preco'=>' 350,00','descricao'=>'The Terror of Basket','imagem'=>'lakersregata.jfif'),
    2=> array('nome'=>'Warriors Shirt','preco'=>' 299,99','descricao'=>' The God','imagem'=>'warriorsregata.jpg'),
    3=> array('nome'=>'Cavaliers Polo-Shirt','preco'=>' 429,99','descricao'=>'Social Best Ever','imagem'=>'cavalierspolo.webp'),
    4=> array('nome'=>'Lakers Polo-Shirt','preco'=>' 359,99','descricao'=>'Social Terror of Basket','imagem'=>'lakerspolo.webp'),
    5=> array('nome'=>'Warriors Polo-Shirt','preco'=>'399,99','descricao'=>'Social God','imagem'=>'warriorspolo.webp'),
    6=> array('nome'=>'Air Jordan 6 Travis Scott','preco'=>'2730,05','descricao'=>'Boot with Bolsos','imagem'=>'jordan6.webp'),
    7=> array('nome'=>'Air Jordan 3 Gold','preco'=>'1500','descricao'=>'Boot Black and Gold God','imagem'=>'jordan3gold.jpg'),
    8=> array('nome'=>'Air Jordan 1','preco'=>'599,99','descricao'=>'Boot Lakers of Chicago','imagem'=>'jordanlakers.jpeg'),
    9=> array('nome'=>'Air Jordan 7 Retro','preco'=>'1999,99','descricao'=>'Boot PSG Retro Jordan','imagem'=>'jordanpsg.webp'),
    10=> array('nome'=>'Air Jordan 1','preco'=>'2000,00','descricao'=>'Custom Boot Cartoon Edition','imagem'=>'jordancartoon.jfif'),
                



);
$sqlStr = "";

    foreach ($produtos as $key => $value){
        $nome = $value ['nome'];
        $descricao = $value ['descricao'];
        $imagem = $value ['imagem'];
        $preco = $value ['preco'];
        $sqlStr = "<br>INSERT INTO `produtos` (`Nome`, `Descricao`, `Imagem`, `Preco`,`CategoriaID`,`Ativo`) VALUES ('$nome', '$descricao', '$imagem', '$preco', 1, 1); ";
        echo $sqlStr;
    }
?>