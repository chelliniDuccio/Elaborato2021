<?php include_once(__DIR__ . '/../components/connesioneServer.php');
//include_once("config.php");

$mail = $_POST['mail'];
$password = $_POST['password'];
$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$telefono = $_POST['telefono'];
$dataNascita = $_POST['dataNascita'];
$documento = $_POST['documento'];


// checking empty fields
if (empty($mail) || empty($password) || empty($nome) | empty($cognome) || empty($telefono) || empty($documento)) {
    if (empty($mail)) {
        echo "<font color='red'>Campo mail non compilato.</font><br/>";
    }
    if (empty($password)) {
        echo "<font color='red'>Campo passsword non compilato.</font><br/>";
    }
    if (empty($nome)) {
        echo "<font color='red'>Campo nome non compilato.</font><br/>";
    }
    if (empty($cognome)) {
        echo "<font color='red'>Campo cognome non compilato.</font><br/>";
    }
    if (empty($telefono)) {
        echo "<font color='red'>Campo telefono non compilato.</font><br/>";
    }
    if (empty($dataNascita)) {
        echo "<font color='red'>Campo data di nascita non compilato.</font><br/>";
    }
    if (empty($documento)) {
        echo "<font color='red'>Campo documento non compilato.</font><br/>";
    }
    //link to the previous page
    echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
} else {
    // if all the fields are filled (not empty)             
    //insert data to database
    try {
        //code... 
        $insert = "INSERT INTO utente(mail,password,nome,cognome,telefono,dataNascita,documento) 
                    VALUES('$mail','$password','$nome','$cognome','$telefono','$dataNascita','$documento')";

        $result = mysqli_query($mysqli, $insert);

        echo "<font color='green'><b>Creazione dell'occount avvenuta con successo</b>";

        echo "<table border=0>";
        echo "<tr bgcolor='#CCCCCC'>";
        echo "<td>Mail</td>";
        echo "<td>password</td>";
        echo "<td>Nome</td>";
        echo "<td>Cognome</td>";
        echo "<td>telefono</td>";
        echo "<td>Data di nascita</td>";
        echo "<td>documento</td>";
        echo "</tr>";

        echo "<td>" . $mail . "</td>";
        echo "<td>" . $password . "</td>";
        echo "<td>" . $nome . "</td>";
        echo "<td>" . $cognome . "</td>";
        echo "<td>" . $telefono . "</td>";
        echo "<td>" . $dataNascita . "</td>";
        echo "<td>" . $documento . "</td>";
        echo "</table>";
    } catch (\Throwable $th) {
        //throw $th;
        echo $th;
    }
}
