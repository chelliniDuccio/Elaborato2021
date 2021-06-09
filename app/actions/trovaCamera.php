<?php include_once(__DIR__ . '/../components/header.php'); ?>
<?php include_once(__DIR__ . "/../components/maps.php"); ?>
<?php include_once(__DIR__ . '/../components/navbarExtra.php'); ?>
<?php include_once(__DIR__ . '/../components/connesioneServer.php');

//include_once("config.php");

$tipoCamera = $_GET['tipoCamera'];
$dataInizio = $_GET['dataInizio'];
$dataFine = $_GET['dataFine'];
$stelleMinime = $_GET['stelleMinime'];
$costoMassimo = $_GET['costoMassimo'];

try {
    //code... 
    $sql = "SELECT *
    FROM camere, hotel
    WHERE hotel.partitaIva = camere.hotel
    AND tipoCamera = '$tipoCamera'
    AND costoNotte <= '$costoMassimo'
    AND hotel.stelle >= '$stelleMinime'
    AND camere.codCamera NOT IN(
        SELECT camere.codCamera
        FROM camere, prenotazione
        WHERE camere.codCamera = prenotazione.camera
        AND (prenotazione.dataInizio >= '$dataInizio' AND prenotazione.dataInizio <= '$dataFine'))
    AND camere.codCamera NOT IN(
        SELECT camere.codCamera
        FROM camere, prenotazione
        WHERE camere.codCamera = prenotazione.camera
        AND (prenotazione.dataFine >= '$dataInizio' AND prenotazione.dataFine <= '$dataFine'))
    AND camere.codCamera NOT IN(
        SELECT camere.codCamera
        FROM camere, prenotazione
        WHERE camere.codCamera = prenotazione.camera
        AND (prenotazione.dataInizio <= '$dataInizio' AND prenotazione.dataFine >= '$dataFine'))
    ORDER BY camere.costoNotte";

    $result = $mysqli->query($sql);


    if ($result->num_rows > 0) {
        echo '<div class="container"> <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">';

        while ($row = $result->fetch_assoc()) {
            ?>
            <div class="col" style="margin-top: 35px;">
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
                    <h5 class="card-subtitle">
                        servizi camera
                    </h5>
                    <ul class="list-group list-group-flush">
                        <?php
                                    $sqlServiziCamera = "SELECT *
                                                            FROM camere, servizi, serviziCamera
                                                            WHERE camere.codCamera = serviziCamera.camera
                                                            AND servizi.codServizio = serviziCamera.servizio
                                                            AND camere.codCamera = " . $row['codCamera'];

                                    $resultServizi = $mysqli->query($sqlServiziCamera);

                                    while ($rowServizi = $resultServizi->fetch_assoc()) {
                                        ?>
                            <li class='list-group-item'>
                                <?php echo $rowServizi['nomeServizio'] ?>
                                <i class='<?php echo $rowServizi["icona"] ?>'></i>
                            </li>
                        <?php
                                    }
                                    ?>
                        <h5 class="card-subtitle">
                            servizi hotel
                        </h5>


                        <?php
                                    $sqlServiziHotel = "SELECT *
                                    FROM camere, serviziHotel, servizi
                                    WHERE camere.hotel = serviziHotel.hotel
                                    AND servizi.codServizio = serviziHotel.servizio
                                    AND camere.hotel = " . $row['hotel'] .
                                        " GROUP BY servizi.nomeServizio";

                                    $resultServizi = $mysqli->query($sqlServiziHotel);

                                    while ($rowServizi = $resultServizi->fetch_assoc()) {
                                        ?>
                            <li class='list-group-item'>
                                <?php echo $rowServizi['nomeServizio'] ?>
                                <i class='<?php echo $rowServizi["icona"] ?>'></i>
                            </li>
                        <?php
                                    }

                                    ?>
                    </ul>
                    <div class="card-footer d-flex justify-content-evenly">
                        <a href="tel:<?php echo $row["telefono"] ?>" type="button" class="btn btn-outline-secondary">
                            <i class="bi bi-telephone"></i>
                            chiamaci
                        </a>
                        <a href="mailto:<?php echo $row["mail"] ?>" type="button" class="btn btn-outline-secondary">
                            <i class="bi bi-envelope"></i>
                            contattaci
                        </a>
                        <a href="prenotaCamera.php?<?php echo http_build_query(array(
                                                                    'dataInizio' => $dataInizio,
                                                                    'dataFine' => $dataFine,
                                                                    'camera' => $row["codCamera"],
                                                                )) ?>" type="button" class="btn btn-outline-secondary">
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
