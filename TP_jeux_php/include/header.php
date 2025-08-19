<!doctype html>
<html lang="fr" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$title?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
    <link rel="stylesheet" href="<?=realpath($_SERVER['HTTP_HOST'])?>/TP_jeux_php/css/styles.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand active" href="<?=realpath($_SERVER['HTTP_HOST'])?>/TP_jeux_php/js/index.php">Accueil</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav w-100 align-items-center">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?=realpath($_SERVER['HTTP_HOST'])?>/TP_jeux_php/html/add_perso.php" >Créer un personnage</a>
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