<?php include_once(__DIR__ . '/../components/header.php'); ?>
<?php include_once(__DIR__ . '/../components/connesioneServer.php');
//include_once("config.php");

$tipoCamera = $_POST['tipoCamera'];
$dataInizio = $_POST['dataInizio'];
$dataFine = $_POST['dataFine'];
$stelleMinime = $_POST['stelleMinime'];
$costoMassimo = $_POST['costoMassimo'];


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
                FROM camera, hotel
                WHERE hotel.partitaIva = camera.hotel 
                AND tipoCamera = '$tipoCamera'
                AND costoNotte <= '$costoMassimo'
                AND hotel.stelle >= '$stelleMinime'";

    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            ?>
            <div class="container">
                <div class="card">
                    <div class="card-header"><b>
                            <?php
                                        echo $row["nome"];
                                        ?>
                        </b></div>
                    <div class="card-body">
                        <h6 class="card-text">
                            <?php
                                        echo "Camera: " . $row["numCamera"];
                                        ?>
                        </h6>
                        <p class="card-text">
                            <?php
                                        echo "Tipo: " . $row["tipoCamera"];
                                        ?>
                        </p>
                        <p class="card-text">
                            <?php
                                        echo "Costo: " . $row["costoNotte"] . "€";
                                        ?>
                        </p>
                        <a href="#" class="btn btn-primary">Prenota</a>
                    </div>
                    <div class="card-footer text-muted">
                        <?php
                                    echo "Num. telefono: " . $row["telefono"] . "<br>";
                                    echo "Mail: " . $row["mail"];
                                    ?>
                    </div>
                </div>
            </div>
<?php
        }
    } else {
        echo 'nessun risultato trovato';
    }
} catch (\Throwable $th) {
    //throw $th;
    echo $th;
}
