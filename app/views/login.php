<?php include_once(__DIR__ . '/../components/header.php'); ?>
<link href="../css/layout.css" rel="stylesheet">

<body class="text-center">

    <div class="card m-auto">
        <div class="card-body">
            <main class="form-signin">
                <form class="row g-3 needs-validation" action="../actions/login.php" novalidate method="POST" novalidate>
                    <div class="col-md-12">
                        <label for="inputEmail4" class="col-2 col-form-label">Email</label>
                        <div class="col-12">
                            <input class="form-control" type="email" placeholder="mail@example.com" name="mail" id="mail" required>
                        </div>
                    </div>
                    <div class="col">
                        <label for="example-password-input" class="col-3 col-form-label">Password</label>
                        <div class="col-12">
                            <input class="form-control" type="password" placeholder="password" name="password" id="password" required>
                        </div>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Accedi</button>
                </form>
        </div>
    </div>
</body>