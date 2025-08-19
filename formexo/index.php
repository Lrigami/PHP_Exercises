<?php
    echo "Hello world!";
    echo "<br />";

    $n1 = 3;
    $n2 = 2;

    $somme = $n1 + $n2;
    $difference = $n1 - $n2;
    $produit = $n1 * $n2;
    $quotient = $n1 / $n2;
    $reste = $n1 % $n2;
    $puissance = $n1 ** $n2;

    echo "$n1 + $n2 = $somme <br />";
    echo "$n1 - $n2 = $difference <br />";
    echo "$n1 * $n2 = $produit <br />";
    echo "$n1 / $n2 = $quotient <br />";
    echo "$n1 = $n2 * ". intval($quotient) . " + $reste <br />";
    echo "$n1 ² = $puissance <br />";
?>