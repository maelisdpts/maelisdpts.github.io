<?php
    $bdd = new PDO('mysql:host=localhost;dbname=website', 'root', '');
    $rep = $bdd->query('SELECT * FROM produits');
    $column = 0;
    $row = 0;
    $html = '<div class="products"><div class="lig'. $row . '">';

    while ($donnee=$rep->fetch()) {
        if ($column == 4) {
            $row += 1;
            $column = 0;
            $html .= '</div><div class="lig'. $row .'">';
        };
        $column += 1;
        $numero = $row*5 + $column;
        $html .= '<div class="product" onclick="produit('. $numero .')"><div class="img"> IMAGE</div> <div class="text"><h2>' . $donnee["Produit"] . '</h2><h3>'. $donnee["Prix"] . '</h3></div></div>';
    }
    $html .= '</div></div>';

    echo($html);
    /*$arr = [];
    while ($donnee=$rep->fetch()) {
        $arr[] = ['Nom'=>$donnee['Produit'], 'Prix'=>$donnee['Prix']];
    };
    echo json_encode($arr);*/
?>