<?php
    session_start();
    if (isset($_SESSION["list_user"])) {
        $userArr = $_SESSION["list_user"];
    } else {
        $userArr = [
            [
                "email" => "user@example.com",
                "password" => "Mdp1234!"
            ],
            [
                "email" => "user2@example.com",
                "password" => "Mdp5678!"
            ]
        ];
        $_SESSION["list_user"] = $userArr;
    }

    if(isset($_SESSION['user'])) {
        if(isset($_SESSION['user']['persoArr'])) {
            $persoArr = $_SESSION['user']['persoArr'];
        } else {
            $persoArr = [];
            $_SESSION['user']['persoArr'] = $persoArr;
        }
    } else {
        $persoArr = [];
    }
?>