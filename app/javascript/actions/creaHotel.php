<?php include_once(__DIR__ . '/../components/header.php'); ?>
<?php include_once(__DIR__ . '/../components/connesioneServer.php'); ?>
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
    ?>
    <div class="row mx-auto text-center my-5">
        <div class="col-sm-12 text-center mx-auto">
            <div class="card text-center mx-auto" style="width:28rem">
                <div class="card-body">
                    <h5 class="card-title">
                        <?php echo "Hotel creato"; ?>
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
