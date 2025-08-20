<?php
    require_once('./conf/init.php');

    if (isset($_POST["sup-perso"])) {
        array_splice($perso_arr, $_POST["sup-perso"], 1);
        $_SESSION['perso_arr'] = $perso_arr;
    }

    $title = "TP jeux PHP";
    include('./include/header.php');
?>

    <header class="p-5 mb-5 bg-body text-body rounded shadow">
        <h1>TP jeux PHP</h1>
        <p>Ce site est un TP pour s'entrainer au PHP</p>
    </header>
    
    <main class="d-flex justify-content-around flex-wrap">
        <?php
            for($i = 0; $i < count($perso_arr); $i++) {
        ?>

        <div class="card shadow bg-body-tertiary rounded" style="width: 18rem; margin: 10px 0 10px 0">
            <div class="card-body">
            <h5 class="card-title"><?=$perso_arr[$i]["nom"]?></h5>
            </div>
            <ul class="list-group list-group-flush">
            <li class="list-group-item">Classe : <?=$perso_arr[$i]["classe"]?></li>
            <li class="list-group-item">Arme : <?=$perso_arr[$i]["arme"]?></li>
            <li class="list-group-item">Endurance : <?=$perso_arr[$i]["end"]?></li>
            <li class="list-group-item">Force : <?=$perso_arr[$i]["for"]?></li>
            <li class="list-group-item">Agilité : <?=$perso_arr[$i]["agi"]?></li>
            <li class="list-group-item">Intelligence : <?=$perso_arr[$i]["int"]?></li>
            </ul>
            <div class="card-body text-center">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="submit" class="btn btn-primary">Sélectionner</button>
                    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                        <button type="submit" class="btn btn-danger" name="sup-perso" value="<?=$i?>">Supprimer</button>                        
                    </form>
                </div>
            </div>
        </div>

        <?php
            }
        ?>
    </main>

    <template>
        <div class="card shadow bg-body-tertiary rounded" style="width: 18rem;">
            <div class="card-body">
            <h5 class="card-title">Nom :</h5>
            </div>
            <ul class="list-group list-group-flush">
            <li class="list-group-item">Classe :</li>
            <li class="list-group-item">Arme :</li>
            <li class="list-group-item">Endurance :</li>
            <li class="list-group-item">Force :</li>
            <li class="list-group-item">Agilité :</li>
            <li class="list-group-item">Intelligence :</li>
            </ul>
            <div class="card-body text-center">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-primary">Sélectionner</button>
                    <button type="button" class="btn btn-danger">Supprimer</button>
                </div>
            </div>
        </div>
    </template>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="./js/themeMode.js"></script>
    <script src="./js/main.js"></script>
</body>
</html>