<?php include_once(__DIR__ . '/../components/header.php'); ?>
<?php include_once(__DIR__ . "/../components/maps.php"); ?>
<?php include_once(__DIR__ . '/../components/navbarExtra.php'); ?>
<?php include_once(__DIR__ . '/../components/connesioneServer.php'); ?>
<?php include_once(__DIR__ . '/../components/header.php');
require_once(__DIR__ . '/../shared/auth.php');
getCurrentUser();

function buildCalendar($row)
{
    $baseUrl = 'https://calendar.google.com/calendar/u/0/r/eventedit';

    $query = http_build_query(array(
        'dates' => parseDate($row["dataInizio"]) . "/" . parseDate($row["dataFine"], true),
        'details' => "◉ Hotel: " . $row["nome"] . "\n"
            . "◉ Camera: " . $row["numCamera"] . "\n"
            . "◉ Costo totale: " . $row["costoTotale"] . "€" . "\n"
            . "◉ Codice prenotazione: " . $row["codPrenotazione"],
        'location' => $row["nome"] . ", Firenze",
        'text' =>  "Prenotazione " . $row["nome"],
        'pli' => "1"
    ));

    return $baseUrl . "?" . $query;
}

function parseDate($dateRaw, $addDay = false)
{
    $date = new DateTime($dateRaw);
    if ($addDay) {
        $date->modify('+1 day');
    }

    return str_replace("-", "", $date->format('Y-m-d'));
}

//https://calendar.google.com/calendar/u/0/r/eventedit?text=piippo&details=wpfoeiwpoeipofi&location=via+roma+22+firenze&dates=20210507/20210506&pli=1
//https://calendar.google.com/calendar/u/0/r/eventeditdates=20210507%2F20210506&details=wpfoeiwpoeipofi&location=via+roma+22+firenze&text=piippo&pli=1

$mail = $current_user['mail'];
try {
    $sql = "SELECT *,((prenotazione.dataFine - prenotazione.dataInizio) * camere.costoNotte) AS costoTotale
            FROM prenotazione, camere, hotel
            WHERE prenotazione.camera = camere.codCamera
            AND prenotazione.utente = '$mail'
            AND camere.hotel = hotel.partitaIva
            ORDER BY prenotazione.dataInizio, camere.hotel";

    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        echo '<div class="container" style = "margin-top: 25px;"> 
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">';
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
                            <?php echo "Costo totale: " . $row["costoTotale"] . "€";      ?>
                        </p>
                        <p class="card-text">
                            <?php echo maps($row["nome"]); ?>
                        </p>
                        <p class="card-text text-center">
                            <a class="btn btn-primary" target="_blank" href="<?php echo buildCalendar($row) ?>">
                                <i class="far fa-calendar"> </i>
                                Aggiungi al calendrio
                            </a>
                        </p>
                    </div>
                    <div class="card-footer text-muted">
                        <span>
                            check-in :
                            <?php echo $row["dataInizio"] ?>
                        </span>
                        <span class="ms-3">
                            check-out :
                            <?php echo $row["dataFine"] ?>
                        </span>
                    </div>
                </div>
            </div>
<?php

        }
        echo '         </div> </div> ';
    } else {
        echo 'Non è stata trovata nessuna prenotazione a tuo nome';
    }
} catch (\Throwable $th) {
    //throw $th;
    echo $th;
}
