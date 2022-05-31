<?php
    ini_set('display_errors', 'On');
    require __DIR__ . '/../php_util/db_connection.php';

    session_start();
    $mysqli = get_db_connection_or_die();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../estilos/estilo.css">
    <title>BitShop</title>
</head>
<body>
    <header>
        <div class="logo"><img src="imagenes/logo_bitwear.png" alt=""></div>
        <div class="search">
            <input type="text" id="idbusqueda" placeholder="Buscador">
            <button class="btn-main btn-search"><i class="fa fa-search" aria-hidden="true"></i></button>
        </div>
        <div class="options-place">
            <div class="item-option"><a href="login.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a></div>
            <div class="item-option"><i class="fa fa-sign-in" aria-hidden="true"></i></div>
            <div class="item-option"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>
        </div>
    </header>
    <div class="container">
        <?php
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<br>';
                $consulta = "SELECT id, nombre, imagen, precio FROM tproductos";
                $result1 = mysqli_query($mysqli, $consulta) or die('Query Error');
                while ($row = mysqli_fetch_array($result1)) {            
                    echo '<div class="row">
                        <div class="col" style="text-align:center">
                            <img src="' . $row['imagen'] . '" alt="imagen"  id="producto" width="50%"/>
                            <br>
                            <br> 
                            <p id="rareza">PRECIO: '.$row['precio'].' &#8364;</p>
                        </div>
                        </div>';           
                }
            #Cerramos la conexión
            mysqli_close($mysqli);
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>