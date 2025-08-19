<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Exercice</title>
</head>
<body>
    <form action="<? $_SERVER['PHP_SELF'] ?>" method="post">
       <label for="ht-price">Saisissez un prix hors taxe&nbsp;:</label>
       <input type="number" name="ht-price" id="ht-price" required>
       <label for="tva">Saisissez un montant de TVA&nbsp;:</label>
       <input type="number" name="tva" id="tva" required>
       <button type="submit">Envoyer</button> 
    </form>

    <?php
        if(isset($_POST["ht-price"]) && isset($_POST["tva"])) 
            {
                $ttc = $_POST["ht-price"] + ($_POST["ht-price"] * $_POST["tva"] / 100);
                echo "<p>Prix HT : <span>". $_POST["ht-price"]."</span>€</p><p>Montant de la TVA : <span>". $_POST['tva'] ."</span>%</p><p>Prix TTC : <span>". $ttc . "</span>€</p>";
            }
    ?>
</body>
</html>