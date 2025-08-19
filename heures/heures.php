<?php
    // exercice heure serveur
    date_default_timezone_set('Europe/Paris');
    $date = getdate();
    echo "Nous sommes le ";
    print_r($date["mday"]);
    echo " ";
    print_r($date["month"]);
    echo " ";
    print_r($date["year"]);
    echo " et il est ";
    print_r($date["hours"]);
    echo "h";
    print_r($date["minutes"]);
    echo " et ";
    print_r($date["seconds"]);
    echo " secondes.";
?>