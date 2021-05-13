<?php include_once(__DIR__ . '/../components/connesioneServer.php');
//include_once("config.php");

$mail = $_POST['mail'];

if (empty($mail)) {
    if (empty($mail)) {
        echo "<font color='red'>Campo mail non compilato.</font><br/>";
    }
}

$insert = "SELECT password
            FROM utente 
            WHERE mail = '$mail'";

$result = mysqli_query($mysqli, $insert);
//$password = mysql_fetch_array($result);
//$risultato = $password['password'];
echo "$mail";
//echo "$risultato";
