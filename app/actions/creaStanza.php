<?php include_once(__DIR__ . '/../components/header.php'); ?>
<?php include_once(__DIR__ . '/../components/connesioneServer.php'); 
require_once(__DIR__ . '/../shared/auth.php');

$hotel = $_POST['hotel'];
$tipo = $_POST['tipo'];
$camera = $_POST['camera'];
$costo = $_POST['costo'];

try {
    $insert = "INSERT INTO camere(hotel,numCamera,costoNotte,tipoCamera) 
                    VALUES('$hotel','$camera','$costo','$tipo')";
    $result = mysqli_query($mysqli, $insert);
    ?>
    <a href="/../Hotel/index.php" type="button" class="btn btn-outline-secondary">
        Torna indiero
    </a>
<?php
} catch (\Throwable $th) {
    //throw $th;
    echo $th;
}