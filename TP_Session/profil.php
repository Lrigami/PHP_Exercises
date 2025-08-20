<?php 
require_once('./init.php');

if (isset($_GET['deco'])) {
    $_SESSION["auth"] = false;
}

if ($_SESSION['auth'] == false) {
    header("Location: ./signin.php");
}

    $isMailValid = true;
    $errMsg = "";
    if(isset($_POST) && (isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password-confirm']))) {
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $isMailValid = false;
            $errMsg = "Format d'email invalide.";
        }
        for($i = 0; $i < count($userArr); $i++) {
            $emails = array_column($userArr, "email");
            if(in_array($_POST['email'], $emails)) {
                $isMailValid = false;
                break;
            }
        }
        if($isMailValid === true) {
            if ($_POST['password'] === $_POST['password-confirm']) {
                $newUser = ['email' => $_POST['email'], 'password' => password_hash($_POST['password'], PASSWORD_DEFAULT), 'username' => htmlspecialchars($_POST['username'])];
                $emails = array_column($userArr, 'email');
                $index = array_search($_SESSION['user']['email'], $emails);
                if ($index !== false) {
                    $userArr[$index] = $newUser;
                    $_SESSION['list_user'] = $userArr;
                }
                header("Location: ./index.php");
            } else {
                $errMsg = "Les mots de passes ne correspondent pas.";
            }
        } else {
            if(!$errMsg) $errMsg = "Cette adresse mail est déjà utilisée.";
        }
    } else {
        $errMsg = "Veuilez remplir tous les champs.";
    }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Profil</title>
</head>
<body>
    <?php include('./nav.php'); ?>

    <main>
        <h1>Votre profil</h1>
        <h2>Modifier vos informations :</h2>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
            <label for="email">Email :</label>
            <input type="email" name="email" id="email" required value="<?= $_SESSION['user']['email'] ?>">
            <label for="username">Nom d'utilisateur :</label>
            <input type="text" name="username" id="username" required value="<?= $_SESSION['user']['username'] ?>">
            <label for="password">Mot de passe :</label>
            <input type="password" name="password" id="password" required>
            <label for="password-confirm">Confirmer votre mot de passe :</label>
            <input type="password" name="password-confirm" id="password-confirm" required>
            <button type="submit">Confirmer</button>
        </form>
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