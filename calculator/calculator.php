<?php
    $calcul = htmlspecialchars($_POST["calcul"]);
    $calcsplit = preg_split('/(?<=[\d\)])([+\/*%-])/', $calcul, -1, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);

    $operators = ["%", "/", "*", "+", "-"];
    for($i = 0; $i < count($operators); $i++) {
        while (in_array($operators[$i], $calcsplit)) {
            $op = $operators[$i];
            $operation = array_search($op, $calcsplit);

            $a = $calcsplit[$operation-1];
            $b = $calcsplit[$operation+1];

            switch ($op) {
                case "%":
                    $opResult = $a % $b;
                    break;
                case "/":
                    $opResult = $a / $b;
                    break;
                case "*":
                    $opResult = $a * $b;
                    break;
                case "+":
                    $opResult = $a + $b;
                    break;
                case "-":
                    $opResult = $a - $b;
                    break;
            };
            array_splice($calcsplit, ($operation-1), 3, $opResult);
        }
    }
    $result = $calcsplit[0];
    echo $result;

    // ancien code php
    // while (in_array("%", $calcsplit)) {
    //     $modulo = array_search('%', $calcsplit);
    //     $moduloResult = ($calcsplit[$modulo-1]) % ($calcsplit[$modulo+1]);
    //     array_splice($calcsplit, ($modulo-1), 3, $moduloResult);
    // }

    // while (in_array("/", $calcsplit)) {
    //     $divide = array_search("/", $calcsplit);
    //     $divideResult = ($calcsplit[$divide-1] / ($calcsplit[$divide+1]));
    //     array_splice($calcsplit, ($divide-1), 3, $divideResult);
    // }

    // while (in_array("*", $calcsplit)) {
    //     $multiply = array_search("*", $calcsplit);
    //     $multiplyResult = ($calcsplit[$multiply-1] * ($calcsplit[$multiply+1]));
    //     array_splice($calcsplit, ($multiply-1), 3, $multiplyResult);
    // }

    // while (in_array("-", $calcsplit)) {
    //     $substract = array_search("-", $calcsplit);
    //     $substractResult = ($calcsplit[$substract-1] - ($calcsplit[$substract+1]));
    //     array_splice($calcsplit, ($substract-1), 3, $substractResult);
    // }

    // while (in_array("+", $calcsplit)) {
    //     $add = array_search("+", $calcsplit);
    //     $addResult = ($calcsplit[$add-1] * ($calcsplit[$add+1]));
    //     array_splice($calcsplit, ($add-1), 3, $addResult);
    // }
?>