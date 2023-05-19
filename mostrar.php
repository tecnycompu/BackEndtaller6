<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOSTRAR PUNTO 3</title>
</head>
<body>
    <?php
        if(isset($_GET['mostrar'])){
            $nom=$_GET['nom'];
            echo 'Nombre: '.$nom.'<br>';
            $ape=$_GET['ape'];
            echo 'Apellido: '.$ape.'<br>';
            $doc=$_GET['doc'];
            echo 'Documento: '.$doc.'<br>';
        }   
    ?>
</body>
</html>