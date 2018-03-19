<?php
    session_start();
    require 'backend/db.php';
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
                <form id="form_coins">
                    <div class="space40"></div>
                    <div class="form-group">
                        <label class="col-form-label" for="inputDefault">5 cent</label>
                        <input class="form-control" id="cent5" type="text">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="inputDefault">10 cent</label>
                        <input class="form-control" id="cent10" type="text">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="inputDefault">25 cent</label>
                        <input class="form-control" id="cent25" type="text">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="inputDefault">1,- SRD</label>
                        <input class="form-control" id="cent100" type="text">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="inputDefault">2,50 SRD</label>
                        <input class="form-control" id="cent250" type="text">
                    </div>
                </div>
                <div class="col-md-4 offset-md-2">
                    <div class="space40"></div>
                    <div class="form-group">
                        <label class="col-form-label" for="inputDefault">5,- SRD</label>
                        <input class="form-control" id="srd5" type="text">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="inputDefault">10,- SRD</label>
                        <input class="form-control" id="srd10" type="text">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="inputDefault">20,- SRD</label>
                        <input class="form-control" id="srd20" type="text">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="inputDefault">50,- SRD</label>
                        <input class="form-control" id="srd50" type="text">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="inputDefault">100,- SRD</label>
                        <input class="form-control" id="srd100" type="text">
                    </div>
                </div>
                <p class="offset-md-1"><b>Totaal bedrag:</b> SRD <span id="amount">00.00</span></p>
                <button type="button" class="btn btn-primary offset-md-6">Terug</button>
                <button type="submit" class="btn btn-success">Optellen</button>
            </form>
        </div>
    </div>

<?php
    require 'includes/footer.php';
?>
<script>
    cashiers.coins();
</script>