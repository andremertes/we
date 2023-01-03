<div class="col-lg-3 p-3"></div>

<div class="col">

    <!-- Karten -->
    <div class="row">

        <!-- Login Form -->
        <div class="col p-3">

            <form>
                <div class="mb-3">
                    <label for="email" class="form-label">E-Mail Adresse</label>
                    <input type="email" class="form-control" id="email" name="email" tabindex="1" placeholder="E-Mail Adresse eingeben">
                </div>
                <div class="mb-3">
                    <label for="passwd" class="form-label">Passwort</label>
                    <input type="password" class="form-control" id="passwd" name="passwd" tabindex="2" placeholder="Passwort">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="agb" name="agb">
                    <label class="form-check-label" for="agb">AGBs und Datenschutzbedingung akzeptieren</label>
                </div>
                <button type="submit" class="btn btn-primary" id="loginSubmit" name="loginSubmit">Einloggen</button>
            </form>

            <p>
                Noch nicht registriert? <a href="" style="text-decoration: none">Registrierung</a>
            </p>

            <p>
                Da der Login Vorgang technisch noch nicht realisiert wurde: <a href="<?= base_url() ?>/AktuellesProjekt" style="text-decoration: none">Überspringen</a>
            </p>

        </div>

    </div>
</div>
<div class="col-lg-3 p-3"></div>