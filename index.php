<html lang="fr">
<head>
    <title>Exemple1</title>

<body>
<?php
$tab = array("nom" => "Lerdorf", "prenom" => "Rasmus", "adresse" => "Chemin des appaches 7", "npa" => "2610", "ville" => "St-Imier", "email" => "rasmus.lerdorf@php.net" );
echo "<table>";
echo "<tr>";
echo "<th>";
echo "Clef";
echo "</th>";
echo "<th>";
echo "Valeur";
echo "</th>";
echo "</tr>";

foreach ($tab AS $key => $value){
    echo "<tr>";
    echo "<td>";
    echo $key;
    echo "</td>";
    echo "<td>";
    echo $value;
    echo "</td>";
    echo "</tr>";
}
echo "</table>"
?>
</body>
</html>