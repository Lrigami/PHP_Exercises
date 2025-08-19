<!doctype html>
<html lang="fr" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jeux JS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
    <link rel="stylesheet" href="../css/main.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand active" href="../index.html">Accueil</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav w-100 align-items-center">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#" >Créer un personnage</a>
                </li>
                <li class="nav-item dropdown ms-lg-auto">
                    <button class="btn btn-link nav-link py-2 px-0 px-lg-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" data-bs-display="static" aria-label="Toggle theme (light)">
                        <i id="theme-icon" class="fa-solid fa-sun theme-icon-active fa-lg my-1"></i>
                        <span class="d-lg-none ms-2" id="bd-theme-text">Toggle theme</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="bd-theme-text">
                        <li>
                            <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="light" aria-pressed="true">
                                <i class="fa-solid fa-sun me-2 opacity-50"></i> Light
                                <i class="fa-solid fa-check ms-auto d-none"></i>
                            </button>
                        </li>
                        <li>
                            <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
                                <i class="fa-solid fa-moon me-2 opacity-50"></i> Dark
                                <i class="fa-solid fa-check ms-auto d-none"></i>
                            </button>
                        </li>
                        <li>
                            <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="auto" aria-pressed="false">
                                <i class="fa-solid fa-adjust me-2 opacity-50"></i> Auto
                                <i class="fa-solid fa-check ms-auto d-none"></i>
                            </button>
                        </li>
                    </ul>
                </li>

            </ul>
          </div>
        </div>
    </nav>

    <main class="container-fluid text-center d-flex justify-content-center flex-column mb-3 align-items-center">
      
        <h1 class="text-center mb-3 mt-3">Création d'un personnage</h1>
        <form class="col-sm-12 col-lg-6 shadow-lg p-3 mb-5 bg-body-tertiary rounded bg-opacity-75" action="../index.html">
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" id="nom" placeholder="Nom du personnage" required>
            </div>
            <br>
            <div class="form-group">
                <label for="classe">Classe</label>
                <select class="form-control" id="classe">
                    <option>Guerrier</option>
                    <option>Archer</option>
                    <option>Magicien</option>
                    <option>Soigneur</option>
                    <option>Voleur</option>
                    <option>Paladin</option>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for="arme">Arme</label>
                <select class="form-control" id="arme">
                    <option>Epée</option>
                    <option>Epée longue</option>
                    <option>Dague</option>
                    <option>Hache</option>
                    <option>Baton</option>
                    <option>Arc</option>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for="end">Endurance</label><output></output>
                <input type="range" class="form-range" max="100" id="end" oninput="this.previousElementSibling.value = ' : ' + this.value">               
            </div>
            <br>
            <div class="form-group">
                <label for="for">Force</label><output></output>
                <input type="range" class="form-range" min="1" max="100" id="for" oninput="this.previousElementSibling.value = ' : ' + this.value">
            </div>
            <br>
            <div class="form-group">
                <label for="agi">Agilité</label><output></output>
                <input type="range" class="form-range" min="1" max="100" id="agi" oninput="this.previousElementSibling.value = ' : ' + this.value">
            </div>
            <br>
            <div class="form-group">
                <label for="int">Intelligence</label><output></output>
                <input type="range" class="form-range" min="1" max="100" id="int" oninput="this.previousElementSibling.value = ' : ' + this.value">
            </div>
            <br>
            <button class="btn btn-primary" onclick="createPerso()">Créer le personnage</button>
        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="../js/themeMode.js"></script>
    <script src="../js/functions.js"></script>
</body>
</html>