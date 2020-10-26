<?php
// Permet de connecter l'utilisateur à son compte

session_start();

$nom = $_POST["Nom"];
$mdp = $_POST["Mdp"];

$bdd = new PDO('mysql:host=localhost;dbname=website', 'root', '');

if (!empty($nom) && !empty($mdp)) {
    $rep = $bdd->prepare('SELECT * FROM user WHERE Nom = ? AND Mdp = ?');
    $rep->execute(array($nom, $mdp));
    $user = $rep->rowCount();

    if($user !== 0) {
        $_SESSION['Nom'] = $nom;
        $_SESSION['Connexion'] = 1;
        echo 'Bien connecté';
    } else {
        echo "Mauvais mail ou mot de passe !";
    };
} else {
    echo 'Veuillez remplit tous les champs';
};

?>