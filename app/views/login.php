<?php include_once(__DIR__ . '/../components/header.php'); ?>

<body class="text-center">
    <main class="form-signin">
        <form class="row g-3">
            <div class="col-md-12">
                <label for="inputEmail4" class="col-2 col-form-label">Email</label>
                <div class="col-12">
                    <input class="form-control" type="email" placeholder="mail@example.com" id="inputEmail4">
                </div>
            </div>
            <div class="col-md-12">
                <label for="example-password-input" class="col-2 col-form-label">Password</label>
                <div class="col-12">
                    <input class="form-control" type="password" placeholder="password" id="example-password-input">
                </div>
            </div>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        </form>
    </main>
</body>