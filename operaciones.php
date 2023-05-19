<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones</title>
</head>
<body>
    <?php
    $n1 = $n2 = $operador = 0;
    
    if (isset($_POST['operar'])) {
        $num1=$_POST['n1'];
        $num2=$_POST['n2'];
        $operador=$_POST['operacion'];
        switch($operador)
        {
            case "Suma":
                $suma=$num1+$num2;
                echo "El resultado de la SUMA es : ".$suma;
                break;    

            case "Resta":
                 $resta=$num1-$num2;
                 echo "El resultado de la RESTA es : ".$resta;
                 break;    
            case "Multiplicación":
                 $multi=$num1*$num2;
                 echo "El resultado de la MULTIPLICACIÓN es : ".$multi;
                 break;    
    
            case "División":
                 $divi=$num1/$num2;
                 echo "El resultado de la DIVISIÓN es : ".$divi;
                 break;    
        }
    }
    ?>

    <br><BR />
    <a href="punto1.html">Regresar</a>

</body>
</html>