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
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="example-text-input" class="col-2 col-form-label">Nome</label>
                    <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                </div>
                <div class="col-md-6">
                    <label for="example-text-input" class="col-2 col-form-label">Cognome</label>
                    <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                </div>
            </div>
            <div class="col-md-12">
                <label for="example-tel-input" class="col-2 col-form-label">Telephone</label>
                <div class="col-12">
                    <input class="form-control" type="tel" placeholder="+39 -(555)-555-5555" id="example-tel-input">
                </div>
            </div>
            <div class="col-md-24">
                <label for="example-datetime-local-input" class="col-2 col-form-label">Data nascita</label>
                <div class="col-12">
                    <input class="form-control" type="date" placeholder="2010-01-01" id="example-date-input">
                </div>
            </div>
            <div class="col-md-12">
                <label for="exampleInputFile">File documento</label>
                <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                <small id="fileHelp" class="form-text text-muted">.</small>
            </div>
            <fieldset class="row mb-3">
                <div class="form-group">
                    <label for="exampleSelect2">Tipo documneto</label>
                    <select class="form-control" id="exampleSelect1">
                        <option>Carta di identita</option>
                        <option>Carta di identità elettronica</option>
                        <option>Patente</option>
                        <option>Passaporto</option>
                    </select>
                </div>
            </fieldset>
            <button type="submit" class="btn btn-primary">Invio</button>
        </form>
</body>