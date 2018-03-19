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
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form>
                    <fieldset>
                        <center><h2>Caissière toevoegen</h2></center>
                        <div class="space30"></div>
                        <div class="form-group">
                            <label class="col-form-label" for="inputDefault">Voornaam</label>
                            <input class="form-control" id="inputDefault" type="text">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="inputDefault">Achternaam</label>
                            <input class="form-control" id="inputDefault" type="text">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="inputDefault">Gebruikersnaam</label>
                            <input class="form-control" id="inputDefault" type="text">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="inputDefault">E-mail</label>
                            <input class="form-control" id="inputDefault" type="text">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="inputDefault">Wachtwoord</label>
                            <input class="form-control" id="inputDefault" type="text">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="inputDefault">Wachtwoord herhalen:</label>
                            <input class="form-control" id="inputDefault" type="text">
                        </div>
                        <div class="space20"></div>
                        <button type="button" class="btn btn-primary">Terug</button>
                        <button type="submit" class="btn btn-success">Toeveogen</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>


    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>