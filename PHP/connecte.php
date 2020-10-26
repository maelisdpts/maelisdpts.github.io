<?php
session_start();

if (isset($_SESSION["Connexion"]) && $_SESSION["Connexion"] == 1) {
    echo 1;
} else {
    echo 0;
};

?>