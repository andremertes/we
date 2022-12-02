<?php
    $reiter = array(
        array(
            'id' => '0',
            'name' => 'ToDo',
            'beschreibung' => 'Dinge, die erledigt werden müssen'
        ),
        array(
            'id' => '1',
            'name' => 'Erledigt',
            'beschreibung' => 'Dinge, die erledigt sind'
        ),
        array(
            'id' => '2',
            'name' => 'Verschoben',
            'beschreibung' => 'Dinge, die später erledigt werden'
        )
    );
?>

<!DOCTYPE html>
<html lang="de">
    <head>

        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>Aufgabenplaner: Reiter</title>
        <link rel="stylesheet" type="text/css" href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://unpkg.com/@fortawesome/fontawesome-free@6.2.1/css/all.min.css">
        <script type="text/javascript" src="https://unpkg.com/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>

    </head>
    <body>
        <div class="container-fluid">

            <?php $heading = "Aufgabenplaner: Reiter"; include('jumbotron.php'); ?>

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
                                        <th scope="col">Name</th>
                                        <th scope="col">Beschreibung</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php if (isset($reiter)): foreach ($reiter as $item): ?>
                                    <tr>
                                        <td><?= isset($item['name']) ? $item['name'] : '' ?></td>
                                        <td><?= isset($item['beschreibung']) ? $item['beschreibung'] : '' ?></td>
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
                                <label for="reiterNeuName">Bezeichnung des Reiters</label>
                                <input type="text" id="reiterNeuName" name="reiterNeuName" class="form-control mt-1" placeholder="Reiter" tabindex="1"><br />

                                <label for="reiterNeuBeschreibung">Beschreibung</label>
                                <textarea id="reiterNeuBeschreibung" name="reiterNeuBeschreibung" class="form-control mt-1 mb-3" placeholder="Beschreibung" rows="3" tabindex="2"></textarea>

                                <button type="submit" class="btn btn-primary" tabindex="3">Speichern</button>
                                <button type="submit" class="btn btn-info ms-1" tabindex="4">Reset</button>
                            </div>

                        </form>

                    </div>
                </div>

                <div class="col-lg-2">

            </div>

        </div>
    </body>
</html>