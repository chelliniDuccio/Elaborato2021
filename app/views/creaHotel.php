<?php include_once(__DIR__ . '/../components/header.php'); ?>

<body class="text-center">
    <div class="card m-auto">
        <div class="card-body">
            <main class="form-signin">
                <form class="row g-3 needs-validation" action="../actions/postUser.php" novalidate method="POST">
                    <div class="col-md-12">
                        <label for="mail" class="col-form-label">Hotel</label>
                        <div class="col-12">
                            <input class="form-control" type="text" name="hotel" placeholder="Nome hotel" id="hotel" required>
                            <div class="invalid-feedback">
                                Inserisci nome hotel
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="mail" class="col-form-label">Partita IVA</label>
                        <div class="col-12">
                            <input class="form-control" type="text" name="hotel" placeholder="Partita Iva" id="partitaIva" required>
                            <div class="invalid-feedback">
                                Partita IVA
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="exampleSelect2">Numero stelle</label>
                        <select id="inputState" class="form-select">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="mail" class="col-form-label">Num. telefono</label>
                        <div class="col-12">
                            <input class="form-control" type="int" name="numTelefono" placeholder="Numero telefono hotel" id="numTelefono" required>
                            <div class="invalid-feedback">
                                Inserisci numero di telefono
                            </div>
                        </div>
                    </div>
                    <div>
                        <button type="invio" name="submit" class="btn btn-primary">Invio</button>
                    </div>
                </form>
            </main>
        </div>
    </div>

</body>