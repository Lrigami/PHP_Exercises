<?php
    $method = $_SERVER["REQUEST_METHOD"];
    if ($method !== 'POST') {
        header('Location: http://localhost:8741/helloform/index.php');
        exit();
    } else {
        echo 'Hello ' . htmlspecialchars($_POST["name"]) . '!';
    }
?>