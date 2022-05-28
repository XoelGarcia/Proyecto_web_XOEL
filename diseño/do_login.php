<?php
    ini_set('display_errors', 'On');
    require __DIR__ . '/../php_util/db_connection.php';

    $mysqli = get_db_connection_or_die();

$femail = $_POST['email'];
$fpass = $_POST['contrasenha'];

if (empty($femail) or empty($fpass)) {
    die("Faltan datos");
}
$query = "SELECT id, encrypted_password FROM tuser WHERE email = '".$femail."'";
$result = mysqli_query($mysqli, $query) or die(header('login.php?login_failed_unknown=True'));
if (mysqli_num_rows($result) > 0) {
    $only_row = mysqli_fetch_array($result);
    if (password_verify($fpass, $only_row[1])) {
        session_start();
        $_SESSION['user_id'] = $only_row[0];
        header('Location: sesion.php');
    } else {
        header('Location: login.php?login_failed_password=True');
        echo $only_row[1];
    }
} else{
    header('Location: login.php?login_failed_email=True');}
?>