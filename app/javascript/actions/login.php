<?php include_once(__DIR__ . '/../components/header.php'); ?>
<?php include_once(__DIR__ . '/../components/navbarExtra.php'); ?>
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
        $currentUser = mysqli_fetch_array($result);
        saveUser($currentUser);
        ?>
        <div class="row mx-auto text-center my-5">
            <div class="col-sm-12 text-center mx-auto">
                <div class="card text-center mx-auto" style="width:28rem">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo "Bentornato " . $currentUser["nome"] . " " . $currentUser["cognome"];   ?>
                        </h5>
                        <p class="card-text"></p>
                        <a href="/../Hotel/index.php"" class=" btn btn-primary">Torna alla pagina home</a>
                    </div>
                </div>
            </div>
        </div>
<?php
    }
} catch (\Throwable $th) {
    echo $th;
}
ob_end_flush();
?>