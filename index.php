<html lang="fr">
<head>
    <title>Exemple1</title>

<body>
<?php

const pi = 3.14159265359;
$rayon = 4;
$diametre = 2*$rayon;
$circonference = 2*$rayon * pi;
$surface = pi * $rayon * $rayon;

echo "<p>\"diamètre\" = $diametre</p>";
echo "<p>\"circonference\" = $circonference</p>";
echo "<p>\"surface\" = $surface</p>";

?>
</body>
</html>