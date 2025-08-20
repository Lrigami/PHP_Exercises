<?php
require_once('./init.php');
    $errMsg = "";

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if(isset($_POST['email']) && isset($_POST['password'])) {
            $userFound = false;

            for($i = 0; $i < count($userArr); $i++) {
                if ($userArr[$i]['email'] === $_POST['email'] && password_verify($_POST['password'], $userArr[$i]['password'])) {
                    $_SESSION['auth'] = true;
                    $_SESSION['user'] = $userArr[$i];
                    if (!empty($_POST['stayconnected'])) {
                        $token = bin2hex(random_bytes(32)); 
                        $userArr[$i]['token'] = $token;
                        $_SESSION['list_user'] = $userArr;
                        setcookie("auth_token", $token, time()+60*60*24*15, "/", "", false, true);
                    }    
                    $userFound = true;
                    header("Location: ./index.php");
                }
            }

            if (!$userFound) {
                $errMsg = "Mauvaise adresse mail ou mauvais mot de passe.";
            }
        } else {
            $errMsg = "Merci de remplir tous les champs.";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Connexion</title>
</head>
<body>
    <main>
        <h1>Connexion</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="email">Email :</label>
            <input type="email" name="email" id="email" required>
            <label for="password">Mot de passe :</label>
            <input type="password" name="password" id="password" required>
            <div>
                <label for="stayconnected">Rester connecté ?</label>
                <input type="checkbox" name="stayconnected" id="stayconnected">
            </div>
            <button type="submit">Connexion</button>
        </form>
        <p>Pas de compte ? <a href="./signup.php">Inscrivez-vous</a></p>
    </main>

    <script>
        <?php if (!empty($errMsg)) : ?>
            let errorMsg = "<?php echo addslashes($errMsg); ?>";
            alert(errorMsg);
            <?php $errMsg = "" ?>
        <?php endif; ?>
    </script>
</body>
</html>