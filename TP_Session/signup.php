<?php
require_once('./init.php');

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
                array_push($userArr, $newUser);
                $_SESSION['list_user'] = $userArr;
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S'enregistrer</title>
</head>
<body>
    <main>
        <h1>S'enregistrer</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
            <label for="email">Email :</label>
            <input type="email" name="email" id="email" required>
            <label for="username">Nom d'utilisateur :</label>
            <input type="text" name="username" id="username" required>
            <label for="password">Mot de passe : </label>
            <input type="password" name="password" id="password" required>
            <label for="password-confirm">Confirmer votre mot de passe :</label>
            <input type="password" name="password-confirm" id="password-confirm" required>
            <button type="submit">S'enregistrer</button>
        </form>
        <p>Vous avez déjà un compte ? <a href="./signin.php">Connectez-vous</a></p>
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