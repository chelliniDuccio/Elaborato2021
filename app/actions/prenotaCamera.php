<?php include_once(__DIR__ . '/../components/header.php'); ?>
<?php include_once(__DIR__ . '/../components/navbarExtra.php'); ?>
<?php include_once(__DIR__ . '/../components/connesioneServer.php');
require_once(__DIR__ . '/../shared/auth.php');
getCurrentUser();

$mail = $current_user['mail'];
$camera = $_GET['camera'];
$inizioPrenotazione = $_GET['dataInizio'];
$finePrenotazione = $_GET['dataFine'];

try {
    $insert = "INSERT INTO `prenotazione` (`camera`, `dataInizio`, `dataFine`, `utente`) 
        VALUES ('$camera', '$inizioPrenotazione', '$finePrenotazione', '$mail')";
    $result = mysqli_query($mysqli, $insert);
    ?>
    <div class="row mx-auto text-center my-5">
        <div class="col-sm-12 text-center mx-auto">
            <div class="card text-center mx-auto" style="width:38rem">
                <div class="card-body">
                    <h5 class="card-title">
                        <?php
                            echo "Grazie " . $current_user['nome'] . " " . $current_user['cognome'] . " per la tua nuova prenotazione"
                            ?>
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
