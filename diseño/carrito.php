<?php
require __DIR__ . '/../php_util/db_connection.php';
session_start();
$mysqli = get_db_connection_or_die();
$user_id = $_SESSION['user_id'];
$id = $_GET['id'];
$cantidad = 1;

try {
    $sql = "INSERT INTO tcarrito (id_user, id_producto, cantidad) VALUES (?, ?, ?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("iii", $user_id, $id, $cantidad);
    $stmt->execute();

    if (!empty($mysqli->error)) {
      header("Location: carrito.php?compra_failed=True");
      exit();
    }
    $stmt->close();
    header('Location: vista.php');
} catch (Exception $e) {
    error_log($e);
    header("Location: carrito.php?compra_failed_unknown=True");
    exit();
}


?>