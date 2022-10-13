<?php

echo "ce formulaire fonctionne en méthode POST";
echo "<br>";

$nom = $_POST["nom"];
$niveau = $_POST["niveau"];

if ((isset($nom) && !empty($nom)) && isset($niveau)) {
    echo "L'utilisateur s'appelle " . stripslashes($nom) . " et son niveau en PHP est " . $niveau;
} else {
    header("Location:formulaire.html");
}