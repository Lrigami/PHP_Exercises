<?php
    require_once('./init.php');

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if(isset($_POST['deleteUser'])) {
            array_splice($userArr, $_POST['deleteUser'], 1);
            $_SESSION['list_user'] = $userArr;
            header("Location: ./listUser.php");
        }
    }
    
    if(isset($_GET)) {
        if (isset($_GET['deco'])) {
            $_SESSION["auth"] = false;
            header("Location: ./signin.php");
        } 
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Liste des utilisateurs</title>
</head>
<body>
    <?php include('./nav.php'); ?> 

    <main>
        <h1>Liste des utilisateurs</h1>
        <table>
            <thead>
                <tr>
                    <th>Mail</th>
                    <th>Pseudo</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    for($i = 0; $i < count($userArr); $i++) {
                ?>

                <tr>
                    <td><?= $userArr[$i]['email'] ?></td>
                    <td><?= $userArr[$i]['username'] ?></td>
                    <td>
                        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                            <button type="submit" name="deleteUser" value="<?=$i?>">Supprimer</button>
                        </form>
                    </td>
                </tr>

                <?php
                    }
                ?>
            </tbody>
        </table>
    </main>
</body>
</html>