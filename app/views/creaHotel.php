<?php include_once(__DIR__ . '/../components/header.php'); ?>
<link href="../css/layout.css" rel="stylesheet">

<body class="text-center">
    <div class="card m-auto">
        <div class="card-body">
            <main class="form-signin">
                <form class="row g-3 needs-validation" action="../actions/creaHotel.php" novalidate method="POST">
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
                            <input class="form-control" type="text" name="partitaIva" placeholder="Partita Iva" id="partitaIva" required>
                            <div class="invalid-feedback">
                                Partita IVA
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="exampleSelect2">Numero stelle</label>
                        <select id="inputState" class="form-select" name="stelle">
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
                            <input class="form-control" type="int" name="telefono" placeholder="Numero telefono hotel" id="numTelefono" required>
                            <div class="invalid-feedback">
                                Inserisci numero di telefono
                            </div>
                        </div>
                    </div>


                    <div class="col-md-12">
                        <label for="mail" class="col-form-label">Mail</label>
                        <div class="col-12">
                            <input class="form-control" type="text" name="mail" placeholder="Mail hotel" id="mail" required>
                            <div class="invalid-feedback">
                                Inseriscila mail
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