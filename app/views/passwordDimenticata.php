<?php include_once(__DIR__ . '/../components/header.php'); ?>

<body class="text-center">
    <div class="card m-auto">
        <div class="card-body">
            <main class="form-signin">
                <form class="row g-2 needs-validation" action="../actions/recuperoPassword.php" novalidate method="POST">
                    <div class="col-auto">
                        <p>Inserisci la mail associata alla password</a></p>
                    </div>
                    <div class="col-auto">
                        <label for="inputMail" class="visually-hidden">Mail</label>
                        <input type="mail" class="form-control" id="inputPassword2" name="mail" placeholder="mail@example.com" required>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3">Invio</button>
                    </div>
                </form>
            </main>
        </div>
    </div>
</body>