<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Result.php</title>
</head>
<body>

<h2>Résultat de l'envoi du formulaire</h2>

<pre>
<?php

echo "<table>";
foreach ($_POST AS $key => $value){
echo "<tr>";
echo "<td>";
echo "$key";
echo "</td>";
echo "<td>";
echo "$value";
echo "</td>";
echo "</tr>";
}
echo "</table>";

echo "<br>";
print_r($_POST)

?>
</pre>

</body>
</html>