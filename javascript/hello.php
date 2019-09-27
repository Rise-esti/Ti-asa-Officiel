<?php
header("Content-Type: text/plain"); // Utilisation d'un header pour spécifier le type de contenu de la page. Ici, il s'agit juste de texte brut (text/plain).
$variable1 = (isset($_GET["variable1"])) ? $_GET["variable1"] : NULL;
$variable2 = (isset($_GET["variable2"])) ? $_GET["variable2"] : NULL;
if ($variable1 && $variable2) {
    // Faire quelque chose...
    echo "OK Voaray";
} else {
    echo "FAIL Tsy mety";
}
?>
