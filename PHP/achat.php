<?php 

//Permet d'ajouter le nouveau produit au panier

$produit = $_POST["ID"];

session_start();

if (!isset($_SESSION["PANIER"])) {
    $_SESSION["PANIER"] = [];
}

$bdd = new PDO('mysql:host=localhost;dbname=website', 'root', 'root');
$rep = $bdd->query('SELECT * FROM produits WHERE ID = '. $produit);
$donnee = $rep->fetch();

array_push($_SESSION["PANIER"], $donnee["Produit"]);



?>