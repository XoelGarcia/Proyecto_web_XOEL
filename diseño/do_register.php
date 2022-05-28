<?php
ini_set('display_errors', 'On');
require __DIR__ . '/../php_util/db_connection.php';

$mysqli = get_db_connection_or_die();

$name = $_POST['nombre'];
$email = $_POST['email'];
$pass = $_POST['contrasenha'];


try {
  $sql = "INSERT INTO tuser (email, nombre, encrypted_password) VALUES (?, ?, ?)";
  $stmt = $mysqli->prepare($sql);
  $stmt->bind_param("sss", $email, $name, password_hash($pass, PASSWORD_BCRYPT));
  $stmt->execute();
  if (!empty($mysqli->error)) {
    header("Location: registro.php?register_failed_email=True");
    exit();
  }
  $stmt->close();
} catch (Exception $e) {
  error_log($e);
  header("Location: registro.php?register_failed_unknown=True");
  exit();
}

header("Location: login.php");