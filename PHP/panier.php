<?php
// Renvoie le code html de la popup panier
$html = '';

session_start();

if ((isset($_SESSION["PANIER"]) && (sizeof($_SESSION["PANIER"]) != 0))) {
    for ($i=0; $i<count($_SESSION["PANIER"]); $i++) {
        $produit = $_SESSION["PANIER"][$i];
        $id = $i+1;
        $html .= '<div class="ligne"><p> '. $produit . '</p><p class="supprimer" onclick="supprimer('. $id .')"> X </p></div>';
    };
    $html .= '<button class="payer" onclick="payer()"> PAYER </button>';
} else {
    $html = '<p> Vous n\'avez pas de produit dans votre panier en cours';
}

echo($html);




?>