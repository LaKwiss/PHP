<html lang="fr">
<head>
    <title>Exemple1</title>

<body>
<?php
$a = date("n");
$mois = "";
switch($a){
    case 1:
        $mois = "janvier";
        break;
    case 2:
        $mois = "Février";
        break;
    case 3:
        $mois = "Mars";
        break;
    case 4:
        $mois = "Avril";
        break;
    case 5:
        $mois = "Mai";
        break;
    case 6:
        $mois = "Juin";
        break;
    case 7:
        $mois = "Juillet";
        break;
    case 8:
        $mois = "Août";
        break;
    case 9:
        $mois = "Septembre";
        break;
    case 10:
        $mois = "Octobre";
        break;
    case 11:
        $mois = "Novembre";
        break;
    case 12:
        $mois = "Décembre";
        break;
}


echo "<p>mois = $mois </p>"

?>
</body>
</html>