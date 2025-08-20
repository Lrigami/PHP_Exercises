<?php
    session_start();
    if (isset($_SESSION["perso_arr"])) {
        $perso_arr = $_SESSION["perso_arr"];
    } else {
        $perso_arr = [];
    }
?>