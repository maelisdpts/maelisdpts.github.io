<?php

// Permet d'inscrire un nouvel utilisateur dans la bdd

session_start();

$nom = $_POST["Nom"];
$email = $_POST["Email"];
$mdp = $_POST["Mdp"];

$bdd = new PDO('mysql:host=localhost;dbname=website', 'root', 'root');

if (!empty($nom) && !empty($email) && !empty($mdp)) {
    $insertmbr = $bdd->prepare("INSERT INTO user(Nom, Email, Mdp) VALUES (?, ?, ?)");
    $insertmbr->execute(array($nom, $email, $mdp));
    
    $_SESSION["Nom"] = $nom;
    $_SESSION["Connexion"] = 1;
    echo 'Vous êtes bien connecté';
} else {
    echo 'Oups... Il y a eu un problème';
};
?>