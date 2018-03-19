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
        <center>
            <h2>Storting</h2>
        </center>
        <div class="space50"></div>
        <select name="" class="col-md-4 offset-md-1" required="required">
            <option value="">John Doe</option>
            <option value="">Linus Torvalds</option>
            <option value="">User User</option>
        </select>
        
        <div class="row">
            <div class="col-md-4 offset-md-1">
                <form>
                    <div class="space40"></div>
                    <div class="form-group">
                        <label class="col-form-label" for="inputDefault">5 cent</label>
                        <input class="form-control" id="inputDefault" type="text">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="inputDefault">10 cent</label>
                        <input class="form-control" id="inputDefault" type="text">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="inputDefault">10 cent</label>
                        <input class="form-control" id="inputDefault" type="text">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="inputDefault">25 cent</label>
                        <input class="form-control" id="inputDefault" type="text">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="inputDefault">1,- SRD</label>
                        <input class="form-control" id="inputDefault" type="text">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="inputDefault">2,50 SRD</label>
                        <input class="form-control" id="inputDefault" type="text">
                    </div>
            </div>
            <div class="col-md-4 offset-md-2">
                <div class="space40"></div>
                <div class="form-group">
                    <label class="col-form-label" for="inputDefault">5,- SRD</label>
                    <input class="form-control" id="inputDefault" type="text">
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="inputDefault">10,- SRD</label>
                    <input class="form-control" id="inputDefault" type="text">
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="inputDefault">20,- SRD</label>
                    <input class="form-control" id="inputDefault" type="text">
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="inputDefault">50,- SRD</label>
                    <input class="form-control" id="inputDefault" type="text">
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="inputDefault">100,- SRD</label>
                    <input class="form-control" id="inputDefault" type="text">
                </div>
            </div>
            <p class="offset-md-1"><b>Totaal bedrag:</b> SRD 10,25</p>
            <div class="offset-md-6">
                <button type="button" class="btn btn-primary">Optellen</button>
                <button type="button" class="btn btn-success">Registreren</button>
            </div>
            
            </form>
        </div>
    </div>


    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>