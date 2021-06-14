<?php include_once(__DIR__ . '/../components/header.php'); ?>
<link href="../css/layout.css" rel="stylesheet">

<body class="text-center">
    <div class="card m-auto">
        <div class="card-body">
            <small>I campi senza * sono non obligatori</small>
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
                    <div class="w-full">
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Cookie policy e privacy</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body text-justify">
                                        <p>
                                            Come molti altri siti, florence hotels potrebbe archiviare o recuperare informazioni dal browser, soprattutto sotto forma di cookie. Tali informazioni possono riguardare l'utente, le sue preferenze o il dispositivo di accesso a Internet (computer, tablet o cellulare) e vengono utilizzate principalmente per adeguare il funzionamento del sito alle aspettative dell'utente, offrendo un'esperienza di navigazione più personalizzata e memorizzando le scelte effettuate in precedenza.
                                        </p>
                                        <p>
                                            Di seguito è possibile saperne di più sui vari modi di utilizzo dei cookie. Se lo si desidera, è possibile impedire il salvataggio dei cookie. Tuttavia, in questo caso l'utilizzo del sito e dei servizi offerti potrebbe risultarne compromesso.
                                        </p>
                                        <h4>
                                            Cookie di autenticazione
                                        </h4>
                                        <p>
                                            Questi cookie sono necessari al corretto accesso e navigazione nell’area riservata del sito.
                                        </p>

                                        <h4>Cookie di targeting </h4>
                                        <p>
                                            Questi cookie consentono di segnalare beni di possibile interesse e memorizzare le preferenze dell'utente.
                                        </p>
                                        <h4> Rinuncia ai cookie </h4>
                                        <p>
                                            In caso di preoccupazioni sull'utilizzo dei cookie, è possibile intervenire ed impedirne l'impostazione, ad esempio modificando la configurazione del browser per bloccarne l’uso. Per informazioni dettagliate sulla procedura necessaria è possibile consultare la guida del proprio browser.
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <a class="link-primary pe-auto" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Cliccando registrati accetti le privacy policy
                        </a>
                    </div>
                    <button type="invio" name="submit" class="btn btn-primary">Registrati</button>
                </form>
                <!--<p style="text-align:center;"><small>Compilare obbligatoriamente i campi con *</small></p>-->
            </main>
        </div>
    </div>
</body>