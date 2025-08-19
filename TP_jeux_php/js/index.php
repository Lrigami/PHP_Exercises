<?php
    include('./include/header.php');
?>

    <header class="p-5 mb-5 bg-body text-body rounded shadow">
        <h1>TP jeux JS</h1>
        <p>Ce site est un TP pour s'entrainer au Javascript client</p>
    </header>
    
    <main class="d-flex justify-content-around flex-wrap"></main>

    <template>
        <div class="card shadow bg-body-tertiary rounded" style="width: 18rem;">
            <div class="card-body">
            <h5 class="card-title">Nom</h5>
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