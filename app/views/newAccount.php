<?php include_once(__DIR__ . '/../components/header.php'); ?>

<body class="text-center">

    <main class="form-signin">
        <form class="row g-3" action="../actions/postUser.php" method="POST">
            <div class="col-md-12">
                <label for="mail" class="col-2 col-form-label">Email</label>
                <div class="col-12">
                    <input class="form-control" type="email" name="mail" placeholder="mail@example.com" id="mail">
                </div>
            </div>
            <div class="col-md-12">
                <label for="password" class="col-2 col-form-label">Password</label>
                <div class="col-12">
                    <input class="form-control" type="password" placeholder="password" name="password" id="password">
                </div>
            </div>
            <div class="row g-1">
                <div class="col-md-6">
                    <label for="nome" class="col-2 col-form-label">Nome</label>
                    <input type="text" class="form-control" placeholder="Nome" name="nome" id="nome">
                </div>
                <div class="col-md-6">
                    <label for="cognome" class="col-2 col-form-label">Cognome</label>
                    <input type="text" class="form-control" placeholder="Cognome" name="cognome" id="cognome">
                </div>
            </div>
            <div class="col-md-12">
                <label for="telefono" class="col-2 col-form-label">Num. telefono</label>
                <div class="col-24">
                    <input class="form-control" type="tel" placeholder="+39 555-555-5555" id="telefono" name="telefono">
                </div>
            </div>
            <div class="col-md-24">
                <label for="dataNascita" class="col-2 col-form-label">Data nascita</label>
                <div class="col-12">
                    <input class="form-control" type="date" placeholder="2000-01-01" id="dataNascita" name="dataNascita">
                </div>
            </div>
            <div class="col-md-12">
                <label for="file">File documento</label>
                <input type="file" class="form-control-file" id="file" aria-describedby="fileHelp" id="file">
            </div>
            <div class="col-md-12">
                <label for="exampleSelect2">Tipo documneto</label>
                <select id="inputState" class="form-select">
                    <option>Carta d'identità</option>
                    <option>Carta d'identità elettronica</option>
                    <option>Patente</option>
                    <option>Passaporto</option>
                </select>
            </div>
            </fieldset>
            <button type="invio" name="submit" class="btn btn-primary">Invio</button>
        </form>
</body>