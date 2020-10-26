<?php
// Renvoie le code html de la page produit.html

session_start();

$bdd = new PDO('mysql:host=localhost;dbname=website', 'root', '');
$rep = $bdd->query('SELECT * FROM produits WHERE ID = ' . $_POST['ID'] .'');
$donnee = $rep->fetch();
/* Il faudra essayer de prendre le noms de chaque colonne de la bdd pour qu'il y ai autant de caractéristique que de colonne (Pour un pull il y a pas de batterie mais du coton )*/
$html = '
            <div class="produit"> 
                <div class="img">
                    <h5> image du produit</h5>
                </div>
                <div class="caracteristiques">
                    <h1>' . $donnee["Produit"] .'</h1>
                    <fieldset class="fieldset">
                        <legend> Caractéristiques </legend>   
                        <table>
                            <tr>
                                <td><h5> Marque <h5></td>
                                <td><h5> . donnee ["Marque"] . <h5></td>
                            </tr>
                            <tr>
                                <td><h5> Taille : </h5></td>
                                <td><h5> . $donnee["Taille"] . <h5></td>
                            </tr>
                            <tr>
                                <td><h5> Batterie </h5></td>
                                <td><h5> . $donnee["Batterie"] . </h5></td>
                            </tr>
                        </table>  
                    </fieldset> 
                    <div class="prix">
                        <button onclick="acheter()"> ACHETER </button>
                        <h3>' . $donnee["Prix"] .' €</h3>
                    </div>                 
                </div>
                <div class="description">
                    <h1> Description du produit </h1>
                    <h5>' . $donnee["Description"] . '</h5>
                    <div class="avis">
                        <h5> AVIS </h5>
                        <div onclick="avis(1)"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M22 9.24l-7.19-.62L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.63-7.03L22 9.24zM12 15.4l-3.76 2.27 1-4.28-3.32-2.88 4.38-.38L12 6.1l1.71 4.04 4.38.38-3.32 2.88 1 4.28L12 15.4z"/></svg></div>
                        <div onclick="avis(2)"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M22 9.24l-7.19-.62L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.63-7.03L22 9.24zM12 15.4l-3.76 2.27 1-4.28-3.32-2.88 4.38-.38L12 6.1l1.71 4.04 4.38.38-3.32 2.88 1 4.28L12 15.4z"/></svg></div>
                        <div onclick="avis(3)"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M22 9.24l-7.19-.62L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.63-7.03L22 9.24zM12 15.4l-3.76 2.27 1-4.28-3.32-2.88 4.38-.38L12 6.1l1.71 4.04 4.38.38-3.32 2.88 1 4.28L12 15.4z"/></svg></div>
                        <div onclick="avis(4)"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M22 9.24l-7.19-.62L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.63-7.03L22 9.24zM12 15.4l-3.76 2.27 1-4.28-3.32-2.88 4.38-.38L12 6.1l1.71 4.04 4.38.38-3.32 2.88 1 4.28L12 15.4z"/></svg></div>
                        <div onclick="avis(5)"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M22 9.24l-7.19-.62L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.63-7.03L22 9.24zM12 15.4l-3.76 2.27 1-4.28-3.32-2.88 4.38-.38L12 6.1l1.71 4.04 4.38.38-3.32 2.88 1 4.28L12 15.4z"/></svg></div>
                        <h5> ( . $donnee["Avis"] . ) </h5>
                    </div>
                </div>
            </div>';

echo($html);

?>