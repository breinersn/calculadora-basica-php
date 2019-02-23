
<!DOCTYPE html>
<html>
<head>

    <title>Calculadora</title>
   
</head>
<body>
    <form action="calcular.php" method="POST">
        <input type="number" name="valor1" required placeholder="valor 1"><br><br>
        <input type="number" name="valor2" required placeholder="valor 2"><br><br>

        <input name="operador" type="radio" checked="checked" value="0">Suma <br>
        <input name="operador" type="radio" value="1">resta <br>
        <input name="operador" type="radio" value="2">Multiplicacion <br>
        <input name="operador" type="radio" value="3">Divicion <br><br>

        <input type="hidden" value="<?php $cal = $_REQUEST['cal']; ?>">
        <input value="<?php echo $cal ?>"><br><br>
        <input  type="submit"  value="Calcular">

    </form>
</body>
</html>
