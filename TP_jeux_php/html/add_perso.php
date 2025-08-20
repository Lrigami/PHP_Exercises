<?php
    require_once('../conf/init.php');

    if (isset($_POST["nom"])) {
        array_push($perso_arr, $_POST);
        $_SESSION["perso_arr"] = $perso_arr;
        header("Location: http://localhost:8741/TP_jeux_php/js/index.php");
    }

    $title = "Ajouter un personnage";
    include('../include/header.php');
?>

    <main class="container-fluid text-center d-flex justify-content-center flex-column mb-3 align-items-center">
        <h1 class="text-center mb-3 mt-3">Création d'un personnage</h1>

        <form class="col-sm-12 col-lg-6 shadow-lg p-3 mb-5 bg-body-tertiary rounded bg-opacity-75" action="<?=$_SERVER["PHP_SELF"]?>" method="POST">
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom du personnage" required>
            </div>

            <div class="form-group">
                <label for="classe">Classe</label>
                <select class="form-control" name="classe" id="classe">
                    <option>Guerrier</option>
                    <option>Archer</option>
                    <option>Magicien</option>
                    <option>Soigneur</option>
                    <option>Voleur</option>
                    <option>Paladin</option>
                </select>
            </div>

            <div class="form-group">
                <label for="arme">Arme</label>
                <select class="form-control" name="arme" id="arme">
                    <option>Epée</option>
                    <option>Epée longue</option>
                    <option>Dague</option>
                    <option>Hache</option>
                    <option>Baton</option>
                    <option>Arc</option>
                </select>
            </div>

            <div class="form-group">
                <label for="end">Endurance</label><output></output>
                <input type="range" class="form-range" max="100" name="end" id="end" oninput="this.previousElementSibling.value = ' : ' + this.value">               
            </div>

            <div class="form-group">
                <label for="for">Force</label><output></output>
                <input type="range" class="form-range" min="1" max="100" name="for" id="for" oninput="this.previousElementSibling.value = ' : ' + this.value">
            </div>

            <div class="form-group">
                <label for="agi">Agilité</label><output></output>
                <input type="range" class="form-range" min="1" max="100" name="agi" id="agi" oninput="this.previousElementSibling.value = ' : ' + this.value">
            </div>

            <div class="form-group">
                <label for="int">Intelligence</label><output></output>
                <input type="range" class="form-range" min="1" max="100" name="int" id="int" oninput="this.previousElementSibling.value = ' : ' + this.value">
            </div>

            <button class="btn btn-primary" type="submit">Créer le personnage</button>
        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="../js/themeMode.js"></script>
    <script src="../js/functions.js"></script>
</body>
</html>