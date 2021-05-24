<?php include_once(__DIR__ . '/../components/header.php'); ?>
<?php include_once(__DIR__ . "/../components/maps.php"); ?>
<?php include_once(__DIR__ . '/../components/navbar.php'); ?>
<?php include_once(__DIR__ . '/../components/connesioneServer.php');

//include_once("config.php");

$tipoCamera = $_GET['tipoCamera'];
$dataInizio = $_GET['dataInizio'];
$dataFine = $_GET['dataFine'];
$stelleMinime = $_GET['stelleMinime'];
$costoMassimo = $_GET['costoMassimo'];


// checking empty fields
/*if (empty($tipoCamera) || empty($dataInizio) || empty($dataFine) | empty($stelleMinime) || empty($stelleMinime) || empty($costoMassino)) {
    if (empty($tipoCamera)) {
        echo "<font color='red'>Campo mail non compilato.</font><br/>";
    }
    if (empty($dataInizio)) {
        echo "<font color='red'>Campo passsword non compilato.</font><br/>";
    }
    if (empty($dataFine)) {
        echo "<font color='red'>Campo nome non compilato.</font><br/>";
    }
    if (empty($stelleMinime)) {
        echo "<font color='red'>Campo cognome non compilato.</font><br/>";
    }
    if (empty($stelleMinime)) {
        echo "<font color='red'>Campo telefono non compilato.</font><br/>";
    }
    if (empty($dataNascita)) {
        echo "<font color='red'>Campo data di nascita non compilato.</font><br/>";
    }
    if (empty($costoMassino)) {
        echo "<font color='red'>Campo documento non compilato.</font><br/>";
    }
    
    //link to the previous page
    echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
} else {
    // if all the fields are filled (not empty)             
    //insert data to database
    */
try {
    //code... 
    $sql = "SELECT *
            FROM camere, hotel
            WHERE hotel.partitaIva = camere.hotel 
            AND tipoCamera = '$tipoCamera'
            AND costoNotte <= '$costoMassimo'
            AND hotel.stelle >= '$stelleMinime'
            AND camere.codCamera NOT IN
            (
                SELECT camere.codCamera
                FROM camere, prenotazione
                WHERE camere.codCamera = prenotazione.camera
                AND (prenotazione.dataInizio >= '$dataInizio' AND prenotazione.dataFine <= '$dataInizio')
            )
            AND camere.codCamera NOT IN
            (
                SELECT camere.codCamera
                FROM camere, prenotazione
                WHERE camere.codCamera = prenotazione.camera
                AND (prenotazione.dataInizio <= '$dataFine' AND prenotazione.dataFine >= '$dataFine')
            )
            AND camere.codCamera NOT IN
            (
                SELECT camere.codCamera
                FROM camere, prenotazione
                WHERE camere.codCamera = prenotazione.camera
                AND (prenotazione.dataInizio <= '$dataInizio' AND prenotazione.dataFine >= '$dataFine')
            )";

    $result = $mysqli->query($sql);


    if ($result->num_rows > 0) {
        echo '<div class="container"> <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">';

        while ($row = $result->fetch_assoc()) {
            ?>
            <div class="col">
                <div class="card mb-3">
                    <div class="card-header">
                        <b>
                            <?php echo $row["nome"] . " " . $row["stelle"] . "★";      ?>
                        </b>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo "Camera: " . $row["numCamera"];      ?>
                        </h5>
                        <p class="card-text">
                            <?php echo "Tipo: " . $row["tipoCamera"];      ?>
                        </p>
                        <p class="card-text">
                            <?php echo "Costo: " . $row["costoNotte"] . "€";      ?>
                        </p>
                        <p class="card-text">
                            <?php echo maps($row["nome"]); ?>
                        </p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            An item
                        </li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                    </ul>
                    <div class="card-footer d-flex justify-content-evenly">
                        <a href="tel:<?php echo $row["telefono"] ?>" type="button" class="btn btn-outline-secondary">
                            <i class="bi bi-telephone"></i>
                            chiamaci
                        </a>
                        <a href="mail:<?php echo $row["mail"] ?>" type="button" class="btn btn-outline-secondary">
                            <i class="bi bi-envelope"></i>
                            contattaci
                        </a>
                        <a href="#" type="button" class="btn btn-outline-secondary">
                            <i class="bi bi-cart-check"></i>
                            Prenota
                        </a>
                    </div>
                </div>
            </div>
<?php

        }
        echo '         </div> </div> ';
    } else {
        echo 'nessun risultato trovato';
    }
} catch (\Throwable $th) {
    //throw $th;
    echo $th;
}
