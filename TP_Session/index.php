<?php 
    require_once('./init.php');

    if (!isset($_SESSION['auth']) && isset($_COOKIE['auth_token'])) {
        $users = $_SESSION['list_user'] ?? [];
        foreach ($users as $user) {
            if (isset($user['token']) && $user['token'] === $_COOKIE['auth_token']) {
                $_SESSION['auth'] = true;
                $_SESSION['user'] = $user;
                break;
            }
        }
    } else if ($_SESSION['auth'] == false) {
        header("Location: ./signin.php");
    }

    if(isset($_GET)) {
        if (isset($_GET['deco'])) {
            $_SESSION["auth"] = false;
            header("Location: ./signin.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>TP Session</title>
</head>
<body>
    <?php include('./nav.php'); ?>    

    <main>
        <h1>Bienvenue <?= $_SESSION['user']['username'] ?></h1>
    </main>
</body>
</html>