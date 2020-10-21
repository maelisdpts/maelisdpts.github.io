<?php

$bdd = new PDO('mysql:host=localhost;dbname=website', 'root', '');
$rep = $bdd->query('SELECT * FROM produits WHERE ID = ' . $_POST['ID'] .'');
$donnee = $rep->fetch();
$html = '
            <div class="produit"> 
                <div class="img">
                    <h5> image du produit</h5>
                </div>
                <div class="caracteristiques">
                    <h1>' . $donnee["Produit"] .'</h1>
                    <div class="prix">
                        <button onclick="acheter()"> ACHETER </button>
                        <h3>' . $donnee["Prix"] . '</h3>
                    </div>
                    
                </div>
                <div class="description">
                    <h5> '. $donnee["Description"] . '</h5>
                </div>
            </div>';

echo($html);

?>