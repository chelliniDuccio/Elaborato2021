<?php include_once(__DIR__ . '/../components/header.php'); ?>
<?php include_once(__DIR__ . '/../components/navbarExtra.php'); ?>
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

    <div class="row mx-auto text-center my-5">
        <div class="col-sm-12 text-center mx-auto">
            <div class="card text-center mx-auto" style="width:28rem">
                <div class="card-body">
                    <h5 class="card-title">
                        <?php echo "Stanza creata"; ?>
                    </h5>
                    <p class="card-text"></p>
                    <a href="/../Hotel/index.php"" class=" btn btn-primary">Torna alla pagina home</a>
                </div>
            </div>
        </div>
    </div>
<?php
} catch (\Throwable $th) {
    //throw $th;
    echo $th;
}
