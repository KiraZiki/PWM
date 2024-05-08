<?php

    require 'funcoesmat.php';

    $resultado = "";
    if(isset($_POST["inputNum1"]) && isset($_POST["inputNum2"])){
        $numero1 = $_POST['inputNum1'];
        $numero2 = $_POST['inputNum2'];

        if($_POST['selectOperacoes'] == "adicao"){
            $resultado = $numero1 . "+" . $numero2 . "=" . soma($numero1, $numero2);
        }
        elseif($_POST['selectOperacoes'] == "subtracao"){
            $resultado = $numero1 . "-" . $numero2 . "=" . sub($numero1, $numero2);
        }
        elseif($_POST['selectOperacoes'] == "multiplicacao"){
            $resultado = $numero1 . "*" . $numero2 . "=" . mult($numero1, $numero2);
        }
        elseif($_POST['selectOperacoes'] == "divisao"){
            $resultado = $numero1 . "/" . $numero2 . "=" . div($numero1, $numero2);
        }
    }

    echo $resultado;
?>