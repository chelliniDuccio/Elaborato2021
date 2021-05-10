<?php include_once(__DIR__ . '../components/connesioneServer.php');

$cookie_mail = "COOKIE_MAIL";
$day =  (86400 * 30);

function saveUser($user)
{
    global $cookie_mail, $day;

    setcookie($cookie_mail, $user["mail"], time() + $day);
}

function getCurrentUser()
{
    global $cookie_mail, $mysqli;
    $userMail = $_COOKIE[$cookie_mail];

    $user = "SELECT *
    FROM utente
    WHERE mail = '$userMail'";

    $result = mysqli_query($mysqli, $user);
}
