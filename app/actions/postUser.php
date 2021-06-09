<?php ob_start(); ?>
<?php include_once(__DIR__ . '/../components/header.php'); ?>
<?php include_once(__DIR__ . '/../components/navbarExtra.php'); ?>
<?php include_once(__DIR__ . '/../components/connesioneServer.php');
require_once(__DIR__ . '/../shared/auth.php');


$mail = $_POST['mail'];
$password = $_POST['password'];
$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$telefono = $_POST['telefono'];
$dataNascita = $_POST['dataNascita'];
$documento = $_POST['documento'];


// checking empty fields

//insert data to database
try {
    //code... 
    $insert = "INSERT INTO utente(mail,password,nome,cognome,telefono,dataNascita,documento) 
                        VALUES('$mail','$password','$nome','$cognome','$telefono','$dataNascita','$documento')";

    $result = mysqli_query($mysqli, $insert);
    saveUserByMail($mail);

    echo "Grazie per aver creato un nuovo account " . $nome . " " . $cognome;

    ?>
    <div class="container-fluid">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Mail</th>
                    <th scope="col">Password</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Cognome</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Data nascita</th>
                    <th scope="col">Documento</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <?php
                            echo $mail;
                            ?>
                    </td>
                    <td>
                        <?php
                            echo $password;
                            ?>
                    </td>
                    <td>
                        <?php
                            echo $nome;
                            ?>
                    </td>
                    <td>
                        <?php
                            echo $cognome;
                            ?>
                    </td>
                    <td>
                        <?php
                            echo $telefono;
                            ?>
                    </td>
                    <td>
                        <?php
                            echo $dataNascita;
                            ?>
                    </td>
                    <td>
                        <?php
                            echo $documento;
                            ?>
                    </td>
                </tr>
            </tbody>
        </table>
        <a href="/../Hotel/index.php" type="button" class="btn btn-outline-secondary">
            Torna alla pagina home
        </a>
    </div>
<?php
} catch (\Throwable $th) {
    //throw $th;
    echo $th;
}
