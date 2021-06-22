<?php
include('../library/Punk.php');

if(isset($_GET['id'])) {
$punk = new Punk();
$all = $punk -> getBeer($_GET['id']);
header('Location: vue.php?id='.$_GET['id']); 
file_put_contents('donnees.json', json_encode($all));
} else {      
$punk = new Punk();
$all = $punk -> getBeers();
file_put_contents('produit.json', json_encode($all));
}



?>
