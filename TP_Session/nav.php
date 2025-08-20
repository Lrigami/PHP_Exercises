<header>
    <nav>
        <ul>
            <li><a href="./index.php">Accueil</a></li>
            <li>
                <a href="./profil.php">Profil</a>
            </li>
            <li><a href="./listUser.php">Liste des utilisateurs</a></li>
            <li>
                <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                    <button type="submit" name="deco">Déconnexion</button>
                </form>
            </li>
        </ul>
    </nav>
</header>