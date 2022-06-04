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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos\estilo.css">
    <title>BitShop</title>
</head>
<body>
    <header>
        <div class="row fixed-top">
            <div class="col">
            <img src="imagenes/logo_bitwear.png" alt="" width="300px" id="logo">
            </div>
            <div class="col text-end">
            <a href="login.php"><img src="imagenes/usuario.png" alt="LOGIN" width="50px" id="iconos"></a>
            <a href="logout.php"><img src="imagenes/logout.png" alt="LOGOUT" width="50px" id="iconos"></a>
            <a href="carrito.php"><img src="imagenes/carrito.png" alt="CARRITO" width="50px" id="iconos"></a>
            </div>
        </div>
    </header>
    <!-- corousel -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="imagenes/bitcoin_carousel.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="imagenes/bitcoin_carousel.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container">
        <div class="row">
            <div class="col"><a href="index.php">TODOS</a></div>
            <div class="col"><a href="index_ropa.php">ROPA</a></div>
            <div class="col"><a href="index_accesorios.php">ACCESORIOS</a></div>
        </div>
    </div>

    <!-- Productos -->
    <div class="container">
        <?php
            // $a= 0;
            // echo '<br>';
            // echo '<br>';
            // echo '<br>';
            // echo '<br>';

            // do {
            //     $a=$a + 3;
            //     $consulta = "SELECT id, nombre, imagen, precio FROM tproductos";
            //     $result1 = mysqli_query($mysqli, $consulta) or die('Query Error');
            //     echo '<div class="row">';
            //     while ($row1 = mysqli_fetch_array($result1)) {
            //         echo '
            //         <div class="col-md-3" style="text-align:center">
            //             <img src="' . $row1['imagen'] . '" alt="imagen"  id="producto" width="300px"/>';
            //         echo '
            //             <br>
            //             <br> 
            //             <p id="rareza">PRECIO: '. $row1['precio'] .' &#8364;</p>
            //         </div>';    
            //             }
            //         echo '</div>'; 
            // } while ($a <= 6);
            // mysqli_close($mysqli);



            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<br>';
                $consulta = "SELECT id, nombre, imagen, precio FROM tproductos WHERE id_categoria=2";
                $result1 = mysqli_query($mysqli, $consulta) or die('Query Error');
                echo '<div class="row">';
                while ($row = mysqli_fetch_array($result1)) {            
                    echo '<div class="col-md-4" style="text-align:center">
                            <img src="' . $row['imagen'] . '" alt="imagen"  id="producto" width="50%"/>
                            <br>
                            <br> 
                            <p id="rareza">PRECIO: '.$row['precio'].' &#8364;</p>
                        </div>';           
                }
                echo '</div>';
            #Cerramos la conexión
            mysqli_close($mysqli);
        ?>
    </div>

    <footer>
       
       <div class="container-footer-all">
        
            <div class="container-body-footer">

                <div class="colum1-footer">
                    <h1>Mas informacion de la compañia</h1>

                    <p>Web creada por Xoel García Tarrío, esta web consiste en venta de productos y pagos online con criptomonedas.</p>

                </div>

                <div class="colum2-footer">

                    <h1>Redes Sociales</h1>

                    <div class="row-footer">
                        <img src="icon/facebook.png">
                        <label>Siguenos en Facebook</label>
                    </div>
                    <div class="row-footer">
                        <img src="icon/twitter.png">
                        <label>Siguenos en Twitter</label>
                    </div>
                    <div class="row-footer">
                        <img src="icon/instagram.png">
                        <label>Siguenos en Instagram</label>
                    </div>

                </div>

                <div class="colum3-footer">

                    <h1>Informacion Contactos</h1>

                    <div class="row2-footer">
                        <img src="icon/house.png">
                        <label>Laracha</label>
                    </div>

                    <div class="row2-footer">
                        <img src="icon/smartphone.png">
                        <label>+34-698110644</label>
                    </div>

                    <div class="row2-footer">
                        <img src="icon/contact.png">
                         <label>xoelgarcia27@gmail.com</label>
                    </div>

                </div>

            </div>
        
        </div>
        
        <div class="container-footer">
               <div class="footer">
                    <div class="copyright">
                        © 2022 Todos los Derechos Reservados | <a href="">Xoel</a>
                    </div>

                    <div class="information">
                        <a href="">Informacion Compañia</a> | <a href="">Privacion y Politica</a> | <a href="">Terminos y Condiciones</a>
                    </div>
                </div>

            </div>
        
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>