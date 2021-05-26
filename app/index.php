<?php include_once(__DIR__ . '/./components/header.php');

require_once(__DIR__ . '/shared/auth.php');

getCurrentUser();
?>

<body class="text-center">
    <nav class="navbar navbar navbar-dark bg-dark">
        <div class="align-items-center d-flex " style="width: 100%; margin-left: 10px;">
            <img src="https://i.pinimg.com/236x/ae/77/fb/ae77fbaba06ef1b667c9316fbf45f064.jpg" alt="" width="40" heigh="40" class="d-inline-block align-text-top">
            <a class="navbar-brand me-auto" style="margin-left: 10px;">Florence Hotel</a>
            <div class="" style="margin-right: 20px;">
                <?php if (!$is_logged) : ?>
                    <button class="btn btn-outline-secondary" type="button" onclick="location.href='./views/newAccount.php'">Regisrati </button>
                    <button class="btn btn-outline-secondary" type="button" onclick="location.href='./views/login.php'">Accedi</button>
                <?php endif; ?>
                <?php if ($is_logged) : ?>
                    <button class="btn btn-outline-secondary" type=btn btn-outline-secondary" onclick="location.href='./views/trovaCamera.php'">Ricerca </button>
                    <button class="btn btn-outline-secondary" type="button" onclick="location.href='./views/login.php'">Esci</button>
                <?php endif; ?>
                <?php if ($is_logged && $is_admin) : ?>
                    <button class="btn btn-outline-secondary" type="button" onclick="location.href='./views/login.php'">Gestione Hotels</button>

                <?php endif; ?>

            </div>
        </div>
    </nav>
    <div style="text-align: center; margin-top: 75px;">
        <h1>Florence Hotel</h1>
        <h2>Sito per la prenotazione degli hotel di firenze</h2>
    </div>
    <style>
        body {
            background-image: url('./assets/wallpaper.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }
    </style>
</body>

</html>