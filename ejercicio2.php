<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #tit{
            color: yellow;
            font-size: 4rem;
        }
    </style>
</head>
<body>
    <a href="?t=Inicio">Inicio</a>
    <a href="?t=Contacto">Contacto</a>
    <a href="?t=Producto">Productos</a>
    <a href="?t=Sobre nosotros">Sobre nosotros...</a>

    
    <?php
    // IsSet() ----> la funcion nos determina si una variable o elemento ya fue declarado antes y nos devuelve verdadero o falso
    // Sin esto nos marcaria un error la primera vez que ingresemos
    if( isset( $_REQUEST['t'] ) ){
        //en el caso de que "exista" el titulo lo guarda
        $titulo = $_GET["t"];
    }else{
        //en el caso de que no (es decir cuando se ingrese por primera vez) por defecto es inicio
        $titulo = "Inicio";
    }

    echo "<h1 id='tit'> $titulo </h1>";

    //muestra un contenido dependiendo del titulo
    if($titulo == "Inicio"){
        echo "Bienvenido a mi pagina web de peZEEEEeC";
    }
    if($titulo == "Contacto"){
        echo "Tel:44444-4444";
    }

    /**
     * Observacion:
     *      En este ejemplo, para recepcionar los datos que llegan atravez el metodo GET tambien se utilizo REQUEST
     *  Esto es porque el REQUEST sirve tanto al metodo GET como al POST
     */

    ?>
</body>
</html>