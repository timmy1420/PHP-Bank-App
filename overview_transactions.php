<?php
    require 'includes/header.php';
?>

<body>
    <!-- Navbar -->
    <?php require 'includes/navbar.php'; ?>
    <!--End Navbar -->


    <div class="container">
        <div class="space70"></div>
        <h1>Overzicht stortingen</h1>

        <div class="row">
            <div class="col-md-12">
                <div class="space30"></div>
                <!-- <button type="button" class="btn btn-success offset-md-9">Toevoegen</button> -->
                <div class="space50"></div>

                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Voornaam</th>
                            <th>Achternaam</th>
                            <th>Datum</th>
                            <th>Saldo</th>
                            <th>Transactie</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John</td>
                            <td>Doe</td>
                            <td>3 Dec 2016</td>
                            <td>SRD 7500,-</td>
                            <td>Opname</td>
                            <td>
                                <button type="button" class="btn btn-info">Inspecteren</button>
                                <button type="button" class="btn btn-danger">Verwijderen</button>
                            </td>
                        </tr>
                        <tr>
                            <td>John</td>
                            <td>Doe</td>
                            <td>3 Dec 2016</td>
                            <td>SRD 5000,-</td>
                            <td>storting</td>
                            <td>
                                <button type="button" class="btn btn-info">Inspecteren</button>
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