<?php include_once(__DIR__ . '/../components/connesioneServer.php');

$cookie_mail = "COOKIE_MAIL";
$day = (86400 * 30);
$is_logged = false;
$is_admin = false;
$current_user = null;

function saveUser($user)
{
    global $cookie_mail, $day;

    setcookie($cookie_mail, $user["mail"], time() + $day, '/');
}

function getCurrentUser()
{
    global $cookie_mail, $mysqli, $is_logged, $is_admin, $current_user;
    $userMail = $_COOKIE[$cookie_mail] ?? '';

    $user = "SELECT *
    FROM utente
    WHERE mail = '$userMail'";

    $result = mysqli_query($mysqli, $user);

    if (mysqli_num_rows($result) != 0) {
        $is_logged = true;
        $current_user = mysqli_fetch_array($result);
        $is_admin = $current_user["amministratore"];
    }
}
