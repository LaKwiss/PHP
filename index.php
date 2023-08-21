<html lang="fr">
<head>
    <title>Exemple1</title>

<body>
<?php

echo "\n<table>";

for ($i=1; $i <=12; $i++) {
    echo "\n\t<tr>";
    for ($j=1;$j<=12;$j++) {
        $t = $i * $j;
        echo "\n\n\t<td>$t</td>";
    }



    echo "</tr>";
}
echo "\n</table>\n";

?>
</body>
</html>