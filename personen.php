<!DOCTYPE html>
<html lang="de">
    <head>

        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>Aufgabenplaner: Personen</title>
        <link rel="stylesheet" type="text/css" href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://unpkg.com/@fortawesome/fontawesome-free@6.2.1/css/all.min.css">
        <script type="text/javascript" src="https://unpkg.com/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>

    </head>
    <body>
        <div class="container-fluid">

            <?php $heading = "Aufgabenplaner: Personen"; include('jumbotron.php'); ?>

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
                                    <th scope="col">E-Mail</th>
                                    <th scope="col">In Projekt</th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Max Mustermann</td>
                                    <td>mustermann@muster.de</td>
                                    <td><input class="form-check-input" type="checkbox" value="" id="checkMustermann"></td>
                                    <td class="text-right">
                                        <button type="button" class="btn btn-link"><i class="far fa-edit"></i></button>
                                        <button type="button" class="btn btn-link"><i class="far fa-trash-alt"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Petra Müller</td>
                                    <td>petra@mueller.de</td>
                                    <td><input class="form-check-input" type="checkbox" value="" id="checkMueller"></td>
                                    <td class="text-right">
                                        <button type="button" class="btn btn-link"><i class="far fa-edit"></i></button>
                                        <button type="button" class="btn btn-link"><i class="far fa-trash-alt"></i></button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                            <h3 class="mt-4">Bearbeiten/Erstellen</h3>
                            <div class="form-group">
                                <label for="neuPersonName">Username</label>
                                <input type="text" id="neuPersonName" name="neuPersonName" class="form-control mt-2 mb-2" placeholder="Username" tabindex="1">
                                <label for="neuPersonEMail">E-Mail</label>
                                <input type="text" id="neuPersonEMail" name="neuPersonEMail" class="form-control mt-2 mb-2" placeholder="E-Mail" tabindex="2">
                                <label for="neuPersonPasswort">Passwort</label>
                                <input type="password" id="neuPersonPasswort" name="neuPersonPasswort" class="form-control mt-2 mb-2" placeholder="Passwort" tabindex="3">
                                <div class="form-check mb-3">
                                    <input class="form-check-input mb-3" type="checkbox" value="" id="neuPersonCheck" name="neuPersonCheck" tabindex="4">
                                    <label class="form-check-label" for="neuPersonCheck">Dem Projekt zugeordnet</label>
                                </div>
                                <button type="submit" class="btn btn-primary" tabindex="5">Speichern</button>
                                <button type="submit" class="btn btn-info ms-1" tabindex="6">Reset</button>
                            </div>

                        </form>

                    </div>
                </div>

                <div class="col-lg-2"></div>

            </div>

        </div>
    </body>
</html>