<?php include_once(__DIR__ . '/../components/connesioneServer.php');

require_once(__DIR__ . '/../shared/auth.php');

$mail = $_POST['mail'];
$password = $_POST['password'];

try {
    $user = "SELECT *
           FROM utente
           WHERE mail = '$mail' 
           AND password = '$password'";

    $result = mysqli_query($mysqli, $user);

    if (mysqli_num_rows($result) == 0) {
        echo "<font color='red'>Account non trovato</font><br/>";
        echo "<br/><a href='javascript:self.history.back();'>Riprova</a>";
    } else {
        saveUser(mysqli_fetch_array($result));
    }
} catch (\Throwable $th) {
    echo $th;
}
