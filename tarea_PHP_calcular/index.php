<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
   
    <?php ?>
<form method="post" action="calcular.php">
   <table width="360">
      <tr>
         <td>Numero 1:</td>
         <td><input type="number" name="form_num1" required="true"/></td>
      </tr>
      <td>
         <select name="form_op" id="" required="true">
            <option value="" selected="true" disabled="true">Seleccione op:</option>
            <option value="1">+ (Sumar)</option>
            <option value="2">- (Restar)</option>
            <option value="3">* (Multiplicar)</option>
            <option value="4">/ (Dividir)</option>
         </select>
      </td>
      <tr>
         <td>Numero 2:</td>
         <td><input type="number" name="form_num2" required="true"/></td>
      </tr>
      <tr>
         <td>Enviar</td>
         <td><input type="submit" value="calcular"/></td>
      </tr>
   </table>
</form> 

<?php ?>
    <?php 
 //echo("Aaron Moises Carrasco Thomas");
 ?> 
</h1>  
</body>
</html>