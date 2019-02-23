<?php
$var1 = $_POST['valor1'];
$var2 = $_POST['valor2'];
$operador = $_POST['operador'];

function calcular($va1, $va2){
 $op = $_POST['operador'];

 switch ($op) {

     case '0':
         $res = $va1 + $va2;
         break;

     case '1':
         $res = $va1 - $va2;
         break;

    case '2':
         $res = $va1 * $va2;
         break;

    case '3':
         $res = $va1 / $va2;
         break;
 }
    return $res;
}

 $opcion = array('SUMA','Resta','Multiplicacion','Divicion');

  //echo "El resultado de la ".$opcion[$operador]." es: " .
  
  $cal =  calcular($var1, $var2);

  if($cal){
    echo "<script>
    location.href='./index.php?cal=".$cal."';
    </script>";
} else{
    echo "<script>
    location.href='./index.php?cal=".$cal."';
    </script>";
}
?>