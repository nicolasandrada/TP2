
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            color: red;
            font-size: 3rem;
        }
    </style>
    
</head>
<body>
    <?php
    /**
     * El metodo GET toma lo que esta escrito en la URL
     * En este caso para que tome el nombre de la persona la url que tuve que poner queda algo asi:
     * 
     * http://localhost/tp2/ejercicio1.php?n=nico
     * 
     * Los datos del metodo GET lo identifica con el simbolo ?
     * En el caso de se necesiten enviar mas de un dato se lo agrega mediante un &. Por ejemplo:  
     * 
     * http://localhost/tp2/ejercicio1.php?n=nico&e=30
     */
        $nombre = $_GET["n"];
        $edad = 30 ;

        echo "<h1> hola $nombre </h1> <br>";

        if($edad >= 18){
            echo "Es mayor de edad <br>";
        }else{
            echo "Es menor de edad <br>";
        }
    ?>
</body>
</html>