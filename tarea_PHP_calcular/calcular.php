<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
   
    <?php 
      require ("funciones.php");

      $num1 = $_POST["form_num1"];
      $op = $_POST["form_op"];
      $num2 = $_POST["form_num2"];

      $resultado = calcular($num1,$num2,$op);

      if ($resultado == null) {
        $resultado = "Operacion no valida";
      }
      $simbolos = ["","+","-","*","/"];
      $signo = $simbolos[$op];

    ?>
    <center>
        <p><strong>Calculadora</strong></p>
        <p><?php echo "$num1 $signo $num2 = $resultado";?></p>
        <p><a href="index.php">Realizar otro calculo</a></p>
    </center>

<?php ?>
    <?php ?> 
</body>
</html>