<?php include_once(__DIR__ . '/../components/header.php'); ?>
<link href="../css/layout.css" rel="stylesheet">

<body class="text-center">
    <div class="card m-auto">
        <div class="card-body">
            <main class="form-signin">
                <form class="row g-3 needs-validation" action="../actions/postUser.php" novalidate method="POST">
                    <div class="col-md-12">
                        <label for="mail" class="col-form-label">Email *</label>
                        <div class="col-12">
                            <input class="form-control" type="email" name="mail" placeholder="mail@example.com" id="mail" required>
                            <div class="invalid-feedback">
                                Inserisci una email
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="password" class="col-form-label">Password *</label>
                        <div class="col-12">
                            <input class="form-control" type="password" minlength="5" placeholder="password" name="password" id="password" required>
                            <div class="invalid-feedback">
                                Inserisci una password
                            </div>
                        </div>
                    </div>
                    <div class="row g-1">   
                        <div class="col-md-6">
                            <label for="nome" class="col-form-label">Nome *</label>
                            <input type="text" class="form-control" minlength="3" placeholder="Nome" name="nome" id="nome" required>
                            <div class="invalid-feedback">
                                Inserisci un nome
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="cognome" class="col-form-label">Cognome *</label>
                            <input type="text" class="form-control" minlength="3" placeholder="Cognome" name="cognome" id="cognome" required>
                            <div class="invalid-feedback">
                                Inserisci un cognome
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="telefono" class="col-form-label">Num. telefono</label>
                        <div>
                            <input class="form-control" type="tel" placeholder="+39 555-555-5555" minlength="10" id="telefono" name="telefono">
                            <div class="invalid-feedback">
                                Inserisci un numero di telefono
                            </div>
                        </div>
                    </div>
                    <div>
                        <label for="dataNascita" class="col-form-label">Data nascita *</label>
                        <div class="col-12">
                            <input class="form-control" type="date" placeholder="2000-01-01" id="dataNascita" name="dataNascita" required>
                            <div class="invalid-feedback">
                                Inserisci la tua data di nascita
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="documento" class="col-form-label">Documento</label>
                        <input type="text" class="form-control" minlength="7" placeholder="numero documento" name="documento" id="documento">
                        <div class="invalid-feedback">
                            Inserisci un documneto
                        </div>
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
                <!--<p style="text-align:center;"><small>Compilare obbligatoriamente i campi con *</small></p>-->
            </main>
        </div>
    </div>
</body>