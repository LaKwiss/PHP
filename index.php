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
<form action="result.php" method="get">

    <input type="text" name="username">
    <br>
    <br>
    <input type="email" name="email">
    <br>
    <br>
    <select name="note">
        <option>Insuffisant (1)</option>
        <option>Suffisant (2)</option>
        <option>Bien (3)</option>
        <option>Très bien (4)</option>
    </select>
    <br>
    <br>

    <textarea name="message"></textarea>
    <br>
    <br>
    <input type="radio" name="genre" value="homme">Homme
    <input type="radio" name="genre" value="femme">Femme
    <br>
    <br>
    <input type="checkbox" name="newsletter" checked>
    <br>
    <br>
    <input type="submit" value="envoyer">


</form>
</body>
</html>