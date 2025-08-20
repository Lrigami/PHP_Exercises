<section >
    <h2>Création d'un personnage</h2>

    <form class="perso-form" action="<?=$_SERVER["PHP_SELF"]?>" method="POST">
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom" placeholder="Nom du personnage" required>
        </div>

        <div class="form-group">
            <label for="classe">Classe</label>
            <select name="classe" id="classe">
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
            <select name="arme" id="arme">
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
            <input type="range" max="100" name="end" id="end" oninput="this.previousElementSibling.value = ' : ' + this.value">               
        </div>

        <div class="form-group">
            <label for="for">Force</label><output></output>
            <input type="range" min="1" max="100" name="for" id="for" oninput="this.previousElementSibling.value = ' : ' + this.value">
        </div>

        <div class="form-group">
            <label for="agi">Agilité</label><output></output>
            <input type="range" min="1" max="100" name="agi" id="agi" oninput="this.previousElementSibling.value = ' : ' + this.value">
        </div>

        <div class="form-group">
            <label for="int">Intelligence</label><output></output>
            <input type="range" min="1" max="100" name="int" id="int" oninput="this.previousElementSibling.value = ' : ' + this.value">
        </div>

        <button type="submit">Créer le personnage</button>
    </form>
</section>