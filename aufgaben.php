<?php
    $aufgaben = array(
        array(
            'id' => '0',
            'bezeichnung' => 'HTML Datei erstellen',
            'beschreibung' => 'HTML Datei erstellen',
            'reiter' => 'ToDo',
            'zustaendig' => 'Max Mustermann'
        ),
        array(
            'id' => '1',
            'bezeichnung' => 'CSS Datei erstellen',
            'beschreibung' => 'CSS Datei erstellen',
            'reiter' => 'ToDo',
            'zustaendig' => 'Max Mustermann'
        ),
        array(
            'id' => '2',
            'bezeichnung' => 'PC eingeschaltet',
            'beschreibung' => 'PC einschalten',
            'reiter' => 'Erledigt',
            'zustaendig' => 'Max Mustermann'
        ),
        array(
            'id' => '3',
            'bezeichnung' => 'Kaffee trinken',
            'beschreibung' => 'Kaffee trinken',
            'reiter' => 'Erledigt',
            'zustaendig' => 'Petra Müller'
        ),
        array(
            'id' => '4',
            'bezeichnung' => 'Für die Uni lernen',
            'beschreibung' => 'Für die Uni lernen',
            'reiter' => 'Verschoben',
            'zustaendig' => 'Max Mustermann'
        )
    );
?>

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

                                <?php if (isset($aufgaben)): foreach ($aufgaben as $item): ?>
                                    <tr>
                                        <td><?= isset($item['bezeichnung']) ? $item['bezeichnung'] : '' ?></td>
                                        <td><?= isset($item['beschreibung']) ? $item['beschreibung'] : '' ?></td>
                                        <td><?= isset($item['reiter']) ? $item['reiter'] : '' ?></td>
                                        <td><?= isset($item['zustaendig']) ? $item['zustaendig'] : '' ?></td>
                                        <td class="text-right">
                                            <button type="submit" class="btn btn-link" value="<?= isset($item['id']) ? $item['id'] : '' ?>"><i class="far fa-edit"></i></button>
                                            <button type="submit" class="btn btn-link" value="<?= isset($item['id']) ? $item['id'] : '' ?>"><i class="far fa-trash-alt"></i></button>
                                        </td>
                                    </tr>
                                <?php endforeach; endif; ?>

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