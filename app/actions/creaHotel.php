<?php include_once(__DIR__ . '/../components/header.php'); ?>
<?php include_once(__DIR__ . '/../components/connesioneServer.php');?>
<?php include_once(__DIR__ . '/../components/navbarExtra.php'); 
require_once(__DIR__ . '/../shared/auth.php');

$hotel = $_POST['hotel'];
$partitaIva = $_POST['partitaIva'];
$stelle = $_POST['stelle'];
$telefono = $_POST['telefono'];
$mail = $_POST['mail'];

try {
    $insert = "INSERT INTO hotel(nome,stelle,partitaIva,telefono,mail) 
                    VALUES('$hotel','$stelle','$partitaIva','$telefono','$mail')";
    $result = mysqli_query($mysqli, $insert);
} catch (\Throwable $th) {
    //throw $th;
    echo $th;
}
