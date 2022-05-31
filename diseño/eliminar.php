<?php
require __DIR__ . '/../php_util/db_connection.php';
session_start();
$mysqli = get_db_connection_or_die();
$user_id = $_SESSION['user_id'];
$id = $_GET['id'];

try {
    $usuario_producto = "SELECT id FROM tcarrito WHERE id_user=".$user_id." AND id_producto=".$id;
    $result5= mysqli_query($mysqli, $usuario_producto) or die('Query Error');
    while ($row = mysqli_fetch_array($result5)) {
        #Mostramos los datos que queremos
        $id_producto_user=$row['id'];
    }
    $sql = "DELETE FROM tcarrito WHERE id=".$id_producto_user;
    $result4 = mysqli_query($mysqli, $sql) or die('Query Error');
} catch (Exception $e) {
    error_log($e);
    header("Location: vista.php?eliminar_failed_unknown=True");
    exit();
}

header('Location: vista.php');
?>