<?php 

if (!isset($_SESSION["auth"])) {
    $_SESSION["auth"] = false;
    header("Location: ./signin.php");
}

if (isset($_SESSION["list_user"])) {
    $userArr = $_SESSION["list_user"];
} else {
    $userArr = [
        [
            "email" => "user@example.com",
            "password" => "Mdp1234!"
        ],
        [
            "email" => "user2@example.com",
            "password" => "Mdp5678!"
        ]
    ];
    $_SESSION["list_user"] = $userArr;
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
                <li><button>Déconnexion</button></li>  
            </ul>
        </nav>
    </header>

    <main>
        <h1>Bienvenue</h1>
    </main>
</body>
</html>