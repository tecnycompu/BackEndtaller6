<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/calculadora.css">
    <title>Mayor o menor de edad</title>
</head>
<body>
<a href="index.html#section-respuestas">
        
    </a>
    <div class="cal-prin">
    <form action="" method="POST">
        <div class="form-group">
            <label for="exampleFormControlInput1">Edad</label>
            <input type="number" name="edad" class="form-control" id="exampleFormControlInput1" placeholder="Digite su edad">
        </div>
        <br><br>
        <button type="submit" name="verificar" class="btn btn-outline-info">Operar</button>
    </form>
    <br>
    <?php
        $edad = 0;      
        if (isset($_POST['verificar'])) {
            $edad = $_POST['edad'];

            if ($edad >= 18) {
                echo "<h1>Es mayor de edad</h1>";
            }
            else if (18 > $edad && 0 < $edad) {
                echo "<h1>Es menor de edad</h1>";
            }else{
                echo "<h1>No valido</h1>";
            }
        }
    ?>

    </div>
</body>
</html>