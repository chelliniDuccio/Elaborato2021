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
    echo "Grazie " . $current_user['nome'] . " " . $current_user['cognome'] . " per la tua nuova prenotazione"
    ?>
    <a href="/../Hotel/index.php" type="button" class="btn btn-outline-secondary">
        Torna alla pagina home
    </a>
<?php
} catch (\Throwable $th) {
    //throw $th;
    echo $th;
}
