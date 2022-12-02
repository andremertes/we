<?php
    $todo = array(
        array(
            'bezeichnung' => 'HTML Datei erstellen',
            'zustaendig' => 'Max Mustermann',
        ),
        array(
            'bezeichnung' => 'CSS Datei erstellen',
            'zustaendig' => 'Max Mustermann',
        )
    );
    $erledigt = array(
        array(
            'bezeichnung' => 'PC eingeschaltet',
            'zustaendig' => 'Petra Müller',
        ),
        array(
            'bezeichnung' => 'Kaffee trinken',
            'zustaendig' => 'Petra Müller',
        )
    );
    $verschoben = array(
        array(
            'bezeichnung' => 'Für die Uni lernen',
            'zustaendig' => 'Max Mustermann',
            )
    )
?>

<!DOCTYPE html>
<html lang="de">
    <head>

        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>Aufgabenplaner: Todos (Aktuelles Projekt)</title>
        <link rel="stylesheet" type="text/css" href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://unpkg.com/@fortawesome/fontawesome-free@6.2.1/css/all.min.css">
        <script type="text/javascript" src="https://unpkg.com/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>

    </head>
    <body>
        <div class="container-fluid">

            <?php $heading = "Aufgabenplaner: Todos (Aktuelles Projekt)"; include('jumbotron.php'); ?>

            <div class="row pt-3">

                <!-- Menu -->
                <?php include('menu.php'); ?>
                <main class="col">

                    <!-- Karten -->
                    <div class="row">

                        <!-- Karte 1 -->
                        <div class="col-lg p-3">
                            <div class="card">
                                <div class="card-header">ToDo:</div>
                                <ul class="list-group list-group-flush">
                                    <?php if(isset($todo)): foreach ($todo as $item): ?>
                                        <li class="list-group-item"><?= isset($item['bezeichnung']) && isset($item['zustaendig']) ? $item['bezeichnung'].' ('.$item['zustaendig'].')' : (isset($item['bezeichnung']) ? $item['bezeichnung'] : '') ?></li>
                                    <?php endforeach; endif; ?>
                                </ul>
                            </div>
                        </div>

                        <!-- Karte 2 -->
                        <div class="col-lg p-3">
                            <div class="card">
                                <div class="card-header">Erledigt:</div>
                                <ul class="list-group list-group-flush">
                                    <?php if(isset($erledigt)): foreach ($erledigt as $item): ?>
                                        <li class="list-group-item"><?= isset($item['bezeichnung']) && isset($item['zustaendig']) ? $item['bezeichnung'].' ('.$item['zustaendig'].')' : (isset($item['bezeichnung']) ? $item['bezeichnung'] : '') ?></li>
                                    <?php endforeach; endif; ?>
                                </ul>
                            </div>
                        </div>

                        <!-- Karte 3 -->
                        <div class="col-lg p-3">
                            <div class="card">
                                <div class="card-header">Verschoben:</div>
                                <ul class="list-group list-group-flush">
                                    <?php if(isset($verschoben)): foreach ($verschoben as $item): ?>
                                        <li class="list-group-item"><?= isset($item['bezeichnung']) && isset($item['zustaendig']) ? $item['bezeichnung'].' ('.$item['zustaendig'].')' : (isset($item['bezeichnung']) ? $item['bezeichnung'] : '') ?></li>
                                    <?php endforeach; endif; ?>
                                </ul>
                            </div>
                        </div>

                    </div>
                </main>
            </div>

        </div>
    </body>
</html>