<?php ob_start(); ?>
<?php include_once(__DIR__ . '/../components/header.php'); ?>
<?php include_once(__DIR__ . '/../components/connesioneServer.php');
require_once(__DIR__ . '/../shared/auth.php');

esci();

?>
<?php include_once(__DIR__ . '/../components/navbarExtra.php'); ?>
<a href="/../Hotel/index.php" type="button" class="btn btn-outline-secondary">
    Torna alla pagina home
</a>