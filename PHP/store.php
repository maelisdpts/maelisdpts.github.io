<?php

// Renvoie le code html de la page store.htm

session_start();

    $bdd = new PDO('mysql:host=localhost;dbname=website', 'root', '');
    $rep = $bdd->query('SELECT * FROM produits');
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
        $numero = $row*4 + $column;
        $html .= '<div class="product" onclick="produit('. $numero .')"><div class="img"> IMAGE</div> <div class="text"><h2>' . $donnee["Produit"] . '</h2><h3>'. $donnee["Prix"] . ' € </h3></div></div>';
        $column += 1;
    }
    $html .= '</div></div>';

    echo($html);
?>