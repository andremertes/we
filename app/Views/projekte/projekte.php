<div class="col">

    <div class="row">

        <!-- Form -->
        <form class="form-group">
            <label class="pt-3" for="selectProjekt"><h3>Projekt wählen</h3></label>
            <select class="form-select mb-3" id="selectProjekt" name="selectProjekt" tabindex="1">
                <option value="" selected>- bitte auswählen -</option>

            </select>
            <button type="submit" class="btn btn-primary" id="btnAuswahl" name="btnAuswahl" tabindex="2">Auswählen</button>
            <button type="submit" class="btn btn-primary ms-1" id="btnBearbeiten" name="btnBearbeiten" tabindex="3">Bearbeiten</button>
            <button type="submit" class="btn btn-danger ms-1" id="btnLoeschen" name="btnLoeschen" tabindex="4">Löschen</button>

            <h3 class="mt-4">Projekt Bearbeiten/erstellen</h3>
            <div class="form-group">
                <label for="neuProjektName">Projektname</label>
                <input type="text" id="neuProjektName" name="neuProjektName" class="form-control mt-2" placeholder="Projekt" tabindex="5"><br />
                <label for="neuProjektBeschreibung">Projektbeschreibung</label>
                <textarea id="neuProjektBeschreibung" name="neuProjektBeschreibung" class="form-control mt-2 mb-2" placeholder="Beschreibung" rows="3" tabindex="6"></textarea>
                <button type="submit" class="btn btn-primary" id="btnNeuSpeichern" name="btnNeuSpeichern" tabindex="7">Speichern</button>
                <button type="submit" class="btn btn-info ms-1" id="btnReset" name="btnReset" tabindex="8">Reset</button>
            </div>
        </form>

    </div>
</div>
<div class="col-lg-2"></div>
