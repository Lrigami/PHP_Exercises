<?php 
require_once('./init.php');

if (!isset($_SESSION["auth"]) || isset($_GET['deco'])) {
    $_SESSION["auth"] = false;
}

if ($_SESSION['auth'] == false) {
    header("Location: ./signin.php");
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP Session</title>
</head>
<body>
    <header>    
        <nav>
            <ul>
                <li>Accueil</li>
                <li>Profil</li>
                <li>Liste des utilisateurs</li>
                <?php include('./nav.php'); ?>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Bienvenue <?= $_SESSION['user']['username'] ?></h1>
    </main>
</body>
</html>