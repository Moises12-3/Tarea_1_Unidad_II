<?php 
    function calcular($num1,$num2,$op){
        $resultado = 0;
        switch ($op) {
            case 1:
                //$resultado = $num1 + $num2;
                Sumar($num1,$num2);
                break;
            case 2:
                $resultado = $num1 - $num2;
                Restar($num1,$num2);
                break;
            case 3:
                $resultado = $num1 * $num2;
                Multiplicar($num1,$num2);
                break;
            case 4:
                $resultado = $num1 / $num2;
                Dividir($num1,$num2);
                break;
            
            default:
                $resultado = null;

                break;
        }
        return $resultado;
    }
    function Sumar($num1,$num2){
        $resultado = $num1 + $num2;
        //return $a + $b;
    };
    function Restar($num1,$num2){
        $resultado = $num1 - $num2;
        //return $a + $b;
    };
    function Multiplicar($num1,$num2){
        $resultado = $num1 * $num2;
        //return $a + $b;
    };
    function Dividir($num1,$num2){
        $resultado = $num1 / $num2;
        //return $a + $b;
    };
?>