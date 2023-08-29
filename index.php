<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <title>Index.php</title>
</head>
<body>
<?php

$Ntheorie = array(  'ICH 117 - Informatique d\'une petite entreprise' => 5.5,
                    'ICH 319 - Programmation' => 5
);

$Ncie = array(      'ICT 216 - IOT' => 5.5,
                    'ICT 187 - NTFS'=> 5.5

);

$Mtheorie = 0;
$Mcie = 0;

foreach ($Ntheorie AS $item){
    $Mtheorie += $item;
}

foreach ($Ncie AS $item){
    $Mcie += $item;
}

$NtheorieLength =  count($Ntheorie);
$NcieLength = count($Ncie);

$Mtheorie = $Mtheorie / $NtheorieLength;
$Mcie = $Mcie / $NcieLength;

echo "<h1>Cours Interentreprises</h1>";

echo "<table>";
foreach ($Ntheorie AS $key => $value){
    echo "<tr>";
    echo "<td>";
    echo $key;
    echo "</td>";
    echo "<td>";
    echo $value;
    echo "</td>";
    echo "</tr>";
}
echo "</table>";

echo "<h1>Cours Interentreprises</h1>";

echo "<table>";
foreach ($Ncie AS $key => $value){
    echo "<tr>";
    echo "<td>";
    echo $key;
    echo "</td>";
    echo "<td>";
    echo $value;
    echo "</td>";
    echo "</tr>";
}
echo "</table>";

$MComp = (($Mtheorie * 4) + ($Mcie))/5;
$Mtpi = 5;

echo "<h1>Compétences en informatique</h1>";

echo "<table>";
    echo "<tr>";
    echo "<td>";
    echo "<div>Modules de compétences informatiques</div>";
    echo "</td>";
    echo "<td>";
    echo $Mtheorie;
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<div>Cours interentreprises</div><br>";
    echo "</td>";
    echo "<td>";
    echo $Mcie;
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<div>Moyenne</div>";
    echo "</td>";
    echo "<td>";
    echo "<div id='mo'>$MComp</div>";
    echo "</td>";
    echo "</tr>";
echo "</table>";

echo "<h1>TPI</h1>";

echo "<table>";
echo "<tr>";
echo "<td>";
echo "<div>Moyenne</div>";
echo "</td>";
echo "<td>";
echo "<div id='mo'>$Mtpi</div>";
echo "</td>";
echo "</tr>";
echo "</table>";

echo "<h1>Note globale</h1>";
$a =($Mtpi + $MComp)/2;
echo "<table>";
echo "<tr>";
echo "<td>";
echo "<div>Moyenne</div>";
echo "</td>";
echo "<td>";
echo "<div id='mo'>$a</div>";
echo "</td>";
echo "</tr>";
echo "</table>";
?>
</body>
</html>