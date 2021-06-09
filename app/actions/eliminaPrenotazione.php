<?php include_once(__DIR__ . '/../components/header.php'); ?>
<?php include_once(__DIR__ . '/../components/navbarExtra.php'); ?>
<?php include_once(__DIR__ . '/../components/connesioneServer.php');

$codPrenotazione = $_GET["codPrenotazione"];

try {
    $sql = "DELETE FROM prenotazione
            WHERE codPrenotazione = $codPrenotazione";

    $result = $mysqli->query($sql);
    echo "Prenotazione eliminata"
    ?>
    <a href="/../Hotel/index.php" type="button" class="btn btn-outline-secondary">
        Torna alla pagina home
    </a>
<?php
} catch (\Throwable $th) {
    //throw $th;
    echo $th;
}
