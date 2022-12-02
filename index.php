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
                                    <li class="list-group-item">HTML Datei erstellen (Max Mustermann)</li>
                                    <li class="list-group-item">CSS Datei erstellen (Max Mustermann)</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Karte 2 -->
                        <div class="col-lg p-3">
                            <div class="card">
                                <div class="card-header">Erledigt:</div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">PC eingeschaltet (Petra Müller)</li>
                                    <li class="list-group-item">Kaffee trinken (Petra Müller)</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Karte 3 -->
                        <div class="col-lg p-3">
                            <div class="card">
                                <div class="card-header">Verschoben:</div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Für die Uni lernen (Max Mustermann)</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </main>
            </div>

        </div>
    </body>
</html>