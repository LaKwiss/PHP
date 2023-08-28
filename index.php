<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index.php</title>
</head>
<body>
<form action="result.php" method="post">

    <select name="formation">
        <option>ICT</option>
        <option>Automaticien</option>
        <option>OIC</option>
        <option>Electronic</option>
    </select>
    <br>
    <input type="radio" name="annee" value="homme">1ère année
    <input type="radio" name="annee" value="femme">2ème année
    <input type="radio" name="annee" value="homme">3ème année
    <input type="radio" name="annee" value="femme">4ème année
    <br>
    <input type="checkbox" name="matu"> Matu
    <br>
    <input type="submit" name="send_name" value="envoyer">


</form>
</body>
</html>