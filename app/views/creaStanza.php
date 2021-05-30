<?php include_once(__DIR__ . '/../components/header.php'); ?>
<link href="../css/layout.css" rel="stylesheet">

<body class="text-center">
    <div class="card m-auto">
        <div class="card-body">
            <main class="form-signin">
                <form class="row g-3 needs-validation" action="../actions/creaStanza.php" novalidate method="POST">
                    <div class="col-md-12">
                        <label for="mail" class="col-form-label">Partita IVA hotel</label>
                        <div class="col-12">
                            <input class="form-control" type="text" name="hotel" placeholder="Partita IVA hotel" id="hotel" required>
                            <div class="invalid-feedback">
                                Inserisci la partita iva dell'hotel
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="exampleSelect2">Tipo camera</label>
                        <select id="inputState" class="form-select" name="tipo">
                            <option>Singola</option>
                            <option>Doppia</option>
                            <option>Matrimoniale</option>
                            <option>Suite</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="mail" class="col-form-label">Num. camera</label>
                        <div class="col-12">
                            <input class="form-control" type="int" name="camera" placeholder="Numero camera" id="camera" required>
                            <div class="invalid-feedback">
                                Inserisci numero camera
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="mail" class="col-form-label">Costo per notte</label>
                        <div class="col-12">
                            <input class="form-control" type="int" name="costo" placeholder="Costo camera" id="costo" required>
                            <div class="invalid-feedback">
                                Inserisci costo
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