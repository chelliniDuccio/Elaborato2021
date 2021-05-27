<?php include_once(__DIR__ . '/../components/header.php'); ?>
<link href="../css/layout.css" rel="stylesheet">

<body class="text-center">
    <div class="card m-auto">
        <div class="card-body">
            <main class="form-signin">
                <form class="row g-3 needs-validation" action="../actions/trovaCamera.php" novalidate method="GET">
                    <div class="col-md-12">
                        <label for="exampleSelect2">Tipo camera</label>
                        <select id="inputState" name="tipoCamera" class="form-select">
                            <option>Singola</option>
                            <option>Doppia</option>
                            <option>Matrimoniale</option>
                            <option>Suite</option>
                        </select>
                    </div>
                    <div class="row g-1">
                        <label for="dataInizio" class="col-form-label">Data inizio prenotazione</label>
                        <div class="col-12">
                            <input class="form-control" type="date" placeholder="2000-01-01" id="dataInizio" name="dataInizio" required>
                            <div class="invalid-feedback">
                                Inserisci la data di inizio prenotazione
                            </div>
                        </div>
                        <div>
                            <label for="dataFine" class="col-form-label">Data fine prenotazione</label>
                            <div class="col-12">
                                <input class="form-control" type="date" placeholder="2000-01-01" id="dataFine" name="dataFine" required>
                                <div class="invalid-feedback">
                                    Inserisci la data di fine prenotazione
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="rangeStart" class="form-label">Numero di stelle minime</label>
                            <input type="range" class="form-range" min="1" max="5" id="rangeStart" oninput="this.nextElementSibling.value = this.value" name="stelleMinime">
                            <output>3</output>
                            <i class="bi-star-fill m-2"></i>
                        </div>
                        <div class="col-md-12">
                            <label for="customRange2" class="form-label">Costo massimo (per notte)</label>
                            <input type="range" class="form-range" min="20" max="300" step="20" id="priceRange" oninput="this.nextElementSibling.value = this.value" name="costoMassimo">
                            <output>costo</output>
                            <i class="bi bi-currency-euro m-2"></i>
                        </div>
                        <div>
                            <button type="invio" name="submit" class="btn btn-primary">Invio</button>
                        </div>
                        </fieldset>
                </form>
            </main>
        </div>
    </div>

</body>