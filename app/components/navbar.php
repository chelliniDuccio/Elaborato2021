<?php include_once(__DIR__ . '/../components/header.php');
require_once(__DIR__ . '/../shared/auth.php');

getCurrentUser();
?>

<html>

<body class="text-center">
    <nav class="navbar navbar navbar-dark bg-dark">
        <div class="align-items-center d-flex " style="width: 100%; margin-left: 10px;">
            <img src="https://i.pinimg.com/236x/ae/77/fb/ae77fbaba06ef1b667c9316fbf45f064.jpg" alt="" width="40" heigh="40" class="d-inline-block align-text-top">
            <a class="navbar-brand me-auto" style="margin-left: 10px;">Florence Hotel</a>
            <div class="" style="margin-right: 10px;">
                <?php if (!$is_logged) : ?>
                    <button class="btn btn-outline-secondary" type="button" onclick="location.href='./views/newAccount.php'">
                        <i class="fas fa-user-plus"></i>
                        Registrati
                    </button>
                    <button class="btn btn-outline-secondary" type="button" onclick="location.href='./views/login.php'">
                        <i class="fas fa-user"></i>
                        Accedi
                    </button>
                <?php endif; ?>
                <?php if ($is_logged) : ?>
                    <button class="btn btn-outline-secondary" type=btn btn-outline-secondary" onclick="location.href='./views/trovaCamera.php'">
                        <i class="fas fa-search"></i>
                        Ricerca
                    </button>
                    <button class="btn btn-outline-secondary" type=btn btn-outline-secondary" onclick="location.href='./views/prenotazioniEffettuate.php'">
                        <i class="fas fa-shopping-cart"></i>
                        Prenotazioni
                    </button>
                    <button class="btn btn-outline-secondary" type="button" onclick="location.href='./actions/esci.php'">
                        <i class="fas fa-sign-out-alt"></i>
                        Esci
                    </button>
                <?php endif; ?>
                <?php if ($is_admin) : ?>
                    <button class="btn btn-outline-secondary" type="button" onclick="location.href='./views/creaHotel.php'">Gestione hotel</button>
                    <button class="btn btn-outline-secondary" type="button" onclick="location.href='./views/creaStanza.php'">Gestione stanze</button>
                    <i class="far fa-user"></i>
                <?php endif; ?>

            </div>
        </div>
    </nav>
</body>

</html>