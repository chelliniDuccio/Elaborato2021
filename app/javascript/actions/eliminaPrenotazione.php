<?php include_once(__DIR__ . '/../components/header.php'); ?>
<?php include_once(__DIR__ . '/../components/navbarExtra.php'); ?>
<?php include_once(__DIR__ . '/../components/connesioneServer.php');

$codPrenotazione = $_GET["codPrenotazione"];

try {
    $sql = "DELETE FROM prenotazione
            WHERE codPrenotazione = $codPrenotazione";

    $result = $mysqli->query($sql);
    ?>

    <div class="row mx-auto text-center my-5">
        <div class="col-sm-12 text-center mx-auto">
            <div class="card text-center mx-auto" style="width:28rem">
                <div class="card-body">
                    <h5 class="card-title">
                        <?php echo "Eliminazione effettuata"; ?>
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
