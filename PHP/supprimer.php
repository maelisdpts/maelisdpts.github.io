<?php 
// Permet de supprimer un élément du panier

session_start();
$id = $_POST["ID"] - 1;

array_splice($_SESSION["PANIER"], $id, 1);

?>