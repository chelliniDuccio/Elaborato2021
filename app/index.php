<?php include_once(__DIR__ . '/./components/header.php'); ?>
<?php include_once(__DIR__ . '/./components/navbar.php');
require_once(__DIR__ . '/shared/auth.php');

getCurrentUser();
?>

<body class="text-center">

    <div style="text-align: center; margin-top: 75px;">
        <h1>Florence Hotel</h1>
        <h2>Sito per la prenotazione degli hotel di Firenze</h2>
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