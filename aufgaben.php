<!DOCTYPE html>
<html lang="de">
    <head>

        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>Aufgabenplaner: Aufgaben</title>
        <link rel="stylesheet" type="text/css" href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://unpkg.com/@fortawesome/fontawesome-free@6.2.1/css/all.min.css">
        <script type="text/javascript" src="https://unpkg.com/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>

    </head>
    <body>
        <div class="container-fluid">

            <?php $heading = "Aufgabenplaner: Aufgaben"; include('jumbotron.php'); ?>

            <div class="row pt-3">

                <!-- Menu -->
                <?php include('menu.php'); ?>
                <div class="col">

                    <div class="row">

                        <!-- Form -->
                        <form class="form-group">

                            <table class="table table-hover">
                                <thead>
                                <tr class="table-light">
                                    <th scope="col">Aufgabenbezeichnung</th>
                                    <th scope="col">Beschreibung der Aufgabe</th>
                                    <th scope="col">Reiter</th>
                                    <th scope="col">Zuständig</th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>HTML Datei erstellen</td>
                                    <td>HTML Datei erstellen </td>
                                    <td>ToDo</td>
                                    <td>Max Mustermann</td>
                                    <td class="text-right">
                                        <button type="button" class="btn btn-link"><i class="far fa-edit"></i></button>
                                        <button type="button" class="btn btn-link"><i class="far fa-trash-alt"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>CSS Datei erstellen</td>
                                    <td>CSS Datei erstellen</td>
                                    <td>ToDo</td>
                                    <td>Max Mustermann</td>
                                    <td class="text-right">
                                        <button type="button" class="btn btn-link"><i class="far fa-edit"></i></button>
                                        <button type="button" class="btn btn-link"><i class="far fa-trash-alt"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>PC eingeschaltet</td>
                                    <td>PC einschalten</td>
                                    <td>Erledigt</td>
                                    <td>Max Mustermann</td>
                                    <td class="text-right">
                                        <button type="button" class="btn btn-link"><i class="far fa-edit"></i></button>
                                        <button type="button" class="btn btn-link"><i class="far fa-trash-alt"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Kaffee trinken</td>
                                    <td>Kaffee trinken</td>
                                    <td>Erledigt</td>
                                    <td>Petra Müller</td>
                                    <td class="text-right">
                                        <button type="button" class="btn btn-link"><i class="far fa-edit"></i></button>
                                        <button type="button" class="btn btn-link"><i class="far fa-trash-alt"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Für die Uni lernen</td>
                                    <td>Für die Uni lernen</td>
                                    <td>Verschoben</td>
                                    <td>Max Mustermann</td>
                                    <td class="text-right">
                                        <button type="button" class="btn btn-link"><i class="far fa-edit"></i></button>
                                        <button type="button" class="btn btn-link"><i class="far fa-trash-alt"></i></button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                            <h3 class="mt-4">Bearbeiten/Erstellen</h3>
                            <div class="form-group">
                                <label for="neuAufgabeName">Aufgabenbezeichnung</label>
                                <input type="text" id="neuAufgabeName" name="neuAufgabeName" class="form-control mt-2 mb-2" placeholder="Aufgabe" tabindex="1">
                                <label for="neuAufgabeBeschreibung">Beschreibung der Aufgabe</label>
                                <textarea id="neuAufgabeBeschreibung" name="neuAufgabeBeschreibung" class="form-control mt-2 mb-2" placeholder="Beschreibung" rows="3" tabindex="2"></textarea>
                                <label for="neuErstellungsdatum">Erstellungsdatum</label>
                                <input type="date" id="neuErstellungsdatum" name="neuErstellungsdatum" class="form-control mt-2 mb-2" placeholder="Erstellungsdatum" tabindex="3">
                                <label for="neuFaellig">Fällig bis</label>
                                <input type="date" id="neuFaellig" name="neuFaellig" class="form-control mt-2 mb-2" placeholder="Erstellungsdatum" tabindex="4">
                                <label for="neuReiter">Zugehöriger Reiter</label>
                                <select class="form-select mt-2 mb-2" id="neuReiter" name="neuReiter" tabindex="5">
                                    <option value="ToDo" selected>ToDo</option>

                                </select>
                                <label for="neuZustaendig">Zuständig</label>
                                <select class="form-select mt-2 mb-3" id="neuZustaendig" name="neuZustaendig" tabindex="6">
                                    <option value="Max Mustermann" selected>Max Mustermann</option>

                                </select>


                                <button type="submit" class="btn btn-primary" id="btnNeuSpeichern" name="btnNeuSpeichern" tabindex="7">Speichern</button>
                                <button type="submit" class="btn btn-info ms-1" id="btnReset" name="btnReset" tabindex="8">Reset</button>
                            </div>

                        </form>

                    </div>
                </div>

                <div class="col-lg-2"></div>

            </div>

        </div>
    </body>
</html>