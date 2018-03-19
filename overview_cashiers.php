<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/app.min.css" />
</head>

<body>
    <!-- Navbar -->
    <?php require 'includes/navbar.php'; ?>
    <!--End Navbar -->


    <div class="container">
        <div class="space70"></div>
        <h1>Overzicht caissières</h1>

        <div class="row">
            <div class="col-md-12">
                <div class="space30"></div>
                <button type="button" class="btn btn-success">Clienten overzicht</button>
                <button type="button" class="btn btn-success offset-md-9">Toevoegen</button>
                <div class="space50"></div>

                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Voornaam</th>
                            <th>Achternaam</th>
                            <th>Laatst aangemeld</th>
                            <th>Laatst afgemeld</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John</td>
                            <td>Doe</td>
                            <td>Doe</td>
                            <td>Doe</td>
                            <td>
                                <button type="button" class="btn btn-info">Gegevens</button>
                                <button type="button" class="btn btn-danger">Verwijderen</button>
                            </td>
                        </tr>
                        <tr>
                            <td>John</td>
                            <td>Doe</td>
                            <td>Doe</td>
                            <td>Doe</td>
                            <td>
                                <button type="button" class="btn btn-info">Gegevens</button>
                                <button type="button" class="btn btn-danger">Verwijderen</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>