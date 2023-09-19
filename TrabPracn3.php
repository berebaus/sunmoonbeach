<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Trabajo practico n2</h1>
    <?php 
    //Ejercicio n1
    $num1= 22;
    if ($num1>0) {
      echo "El numero es positivo";
    }elseif ($num1<0) {
      echo "El numero es negativo";
    }else {
      echo "El numero es cero";
    }  

    // Ejercicio n2
    $num2 = 4;
    if ($num2>1 & $num2<10) {
    echo "El numero cumple las reglas";
  } else {
    echo "El  numero no cumple.";
  }
    //Ejercicio n3
    $num3 = 20;
    if ($num3>10 || $num2<2) {
    echo "El numero cumple las reglas";
  } else {
    echo "El  numero no cumple.";
      }

    //Ejercicio n4
    $numero1 = 10;
    $numero2 = 5;
if ($numero1 > $numero2) {
  echo  = ($numero1 + $numero2);
  echo  = ($numero1 - $numero2);
} elseif ($numero1 < $numero2) {
    echo  = ($numero1 / $numero2);
    echo  = ($numero1 * $numero2);
    echo  = ($numero1 % $numero2);
}else {
  echo "Los numeros ingresados son iguales";
}   
   ?>
  </body>
</html>
