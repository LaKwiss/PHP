<html lang="fr">
<head>
    <title>Exemple1</title>

<body>
<?php

$jour = date("w");
$j = "";
$tableau = array("Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche");

switch ($jour-1){
    case 0:
        $j = $tableau[0];
        break;
    case 1:
        $j = $tableau[1];
        break;
    case 2:
        $j = $tableau[2];
        break;
    case 3:
        $j = $tableau[3];
        break;
    case 4:
        $j = $tableau[4];
        break;
    case 5:
        $j = $tableau[5];
        break;
    case 6:
        $j = $tableau[6];
        break;
    case 7:
        $j = $tableau[7];
        break;
}

echo $j;

?>
</body>
</html>