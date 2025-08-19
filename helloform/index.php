<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice formulaire php</title>
</head>
<body>
    <p>Méthode GET</p>
    <form action="./hello.php" method="get">
        <label>Quel est votre prénom ?
            <input type="text" name="name" required>
        </label>
        <button type="submit">Envoyer</button>
    </form>

    <p>Méthode POST</p>
    <form action="./hello.php" method="post">
        <label>Quel est votre prénom ?
            <input type="text" name="name" required>
        </label>
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>