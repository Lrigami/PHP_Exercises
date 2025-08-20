<section class="personnages">
    <?php
        for($i = 0; $i < count($persoArr); $i++) {
    ?>

    <div class="personnage-card">
        <h5 ><?=$persoArr[$i]["nom"]?></h5>
        <ul>
            <li>Classe : <?=$persoArr[$i]["classe"]?></li>
            <li>Arme : <?=$persoArr[$i]["arme"]?></li>
            <li>Endurance : <?=$persoArr[$i]["end"]?></li>
            <li>Force : <?=$persoArr[$i]["for"]?></li>
            <li>Agilité : <?=$persoArr[$i]["agi"]?></li>
            <li>Intelligence : <?=$persoArr[$i]["int"]?></li>
        </ul>
        <div class="personnage-actions" role="group" aria-label="Basic example">
            <button type="submit">Sélectionner</button>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                <button type="submit" name="sup-perso" value="<?=$i?>">Supprimer</button>                        
            </form>
        </div>
    </div>

    <?php
        }
    ?>
</section>

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