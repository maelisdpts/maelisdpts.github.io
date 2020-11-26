<?php

// Renvoie le code html de la page store.html

session_start();

    $bdd = new PDO('mysql:host=localhost;dbname=website;charset=utf8', 'root', 'root');
    if (isset($_POST['Produit'])) {
        if (isset($_POST['Prix1'])) {
            if($_POST['Produit'] != 'e'){
                $rep = $bdd->query('SELECT * FROM produits WHERE prix BETWEEN ' . $_POST['Prix1'] . ' AND ' . $_POST['Prix2'] . ' AND categorie=\'' .$_POST['Produit']. '\'');
            }else{
                $rep = $bdd->query('SELECT * FROM produits WHERE prix BETWEEN ' . $_POST['Prix1'] . ' AND ' . $_POST['Prix2']);
            }
        }else {
            if($_POST['Produit'] != 'e'){
                $rep = $bdd->query('SELECT * FROM produits WHERE categorie=\'' .$_POST['Produit']. '\'');
            }else{
                $rep = $bdd->query('SELECT * FROM produits');
            }
        };
    } else {
        if (isset($_POST['Prix1'])) {
            $rep = $bdd->query('SELECT * FROM produits WHERE prix BETWEEN '. $_POST['Prix1'] .' AND ' . $_POST['Prix2']);
        } else {
            $rep = $bdd->query('SELECT * FROM produits');
        };
    };

    $column = 1;
    $row = 0;
    $html = '<div class="products"><div class="lig'. $row . '">';

    while ($donnee=$rep->fetch()) {
        if ($row == 0 && $column == 5) {
            $row += 1;
            $column = 1;
            $html .= '</div><div class="lig'. $row .'">';
        }else if ($row != 0 && $column == 5) {
            $row += 1;
            $column = 1;
            $html .= '</div><div class="lig'. $row .'">';
        };
        $nom = $donnee["ID"];
        $html .= '<div class="product" onclick="produit('. $nom .')"><div class="img" ><img class="img" src="'. $donnee['Image'] .'"> </div> <div class="text"><h2>' . $donnee["Categorie"] . '</h2><h3>'. $donnee["Prix"] . ' € </h3></div></div>';
        $column += 1;
    }

    if ($row == 0 && $column == 1){
        $html .= '<h3> Aucun produit ne correspond à votre recherche...';
    }
    $html .= '</div></div>';

    echo($html);
?>