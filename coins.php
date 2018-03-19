<?php
    require 'includes/header.php';
?>

<body>
    <!-- Navbar -->
    <?php require 'includes/navbar.php'; ?>
    <!--End Navbar -->


    <div class="container">
        <div class="space70"></div>
        <center>
            <h2>Munten teller</h2>
        </center>
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
            <button type="button" class="btn btn-success offset-md-7">Optellen</button>
            </form>
        </div>
    </div>


    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>