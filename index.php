<html>
<head>
    <title>ICT JB v2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
include("notes.inc.php");



echo "<table border='3' id='b'>";
foreach ($tab_notes AS $nomDomaine => $domaine){

    $nbNote = 0;
    $sommeNote = 0;

    echo "<tr><th colspan='4' class='title'>". $domaine['desc']."</th>"."</tr>";


    foreach($domaine['modules'] AS $key => $modules){
        echo "<tr>";
        echo "<td>". $key."</td>" ;
        echo "<td>" .$modules['desc']."</td>";
        echo "<td>" .$modules['date']."</td>";
        if($modules['note'] >= 4.5){
            echo "<td class='suf'>".$modules['note']."</td>";
        }elseif ($modules['note'] < 4){
            echo "<td class='insuf'>".$modules['note']."</td>";
        }else {
            echo "<td class='mid'>".$modules['note']."</td>";
        }

        $nbNote++;
        $sommeNote += $modules['note'];

        echo "</tr>";

    }
    $moyenne = $sommeNote / $nbNote;
    echo "<tr>";
    echo "<td colspan='3'>Moyenne</td>";
    echo "<td>".$moyenne."</td>";

    $tab_notes[$nomDomaine]['moyenne'] = $moyenne;
    echo "</tr>";

}
echo "</table>";

echo "<table border='2' id='a'>";

foreach($tab_notes AS $domaine){
    echo "<tr>";
    echo "<td>" .$domaine['desc']."</td>";
    echo "<td>" .$domaine['ponderation']."%"."</td>";

    echo "<td class='suf'>".$domaine['moyenne']."</td>";
    echo "</tr>";

}

$mf = 0;
$pond = 0;
foreach ($tab_notes AS $domaine){

    $mf += (($domaine['moyenne'] * $domaine['ponderation']));
    $pond += $domaine['ponderation'];
}

$final = $mf / $pond;
$tab_notes['moyenne_finale'] = $final;


echo "<table id='t' border='2'>";
echo "<tr>";
echo "<td id='c'>Moyenne Générale</td>";


echo "<td id='d'>".round($final)."</td>";
echo "</tr>";
echo "</table>";
if ($final > 4){
    echo"<h1 class='multicolor-rotate' >CFC REUSSI</h1>";
}
else{
    echo"<h1 class='no'>CFC PAS REUSSI, A L'ANNEE PROCHAINE</h1>";
}



?>
</body>
</html>
