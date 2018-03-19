<?php
    require 'includes/header.php';
?>

<body>
    <!-- Navbar -->
    <?php require 'includes/navbar.php'; ?>
    <!--End Navbar -->


    <div class="container">
        <div class="space70"></div>
        <h2>Caissière gegevens:</h2>
        
        <div class="row">
            <div class="col-md-8">
                <div class="space50"></div>
                <table>
                    <tr style="height: 40px">
                        <td style="width: 200px"><b>Voornaam:</b></td>
                        <td>Voornaam</td>
                    </tr>
                    <tr style="height: 40px">
                        <td style="width: 200px"><b>Achternaam:</b></td>
                        <td>Achternaam</td>
                    </tr>
                    <tr style="height: 40px">
                        <td style="width: 200px"><b>Gebruikersnaam:</b></td>
                        <td>Gebruikersnaam</td>
                    </tr>
                    <tr style="height: 40px">
                        <td style="width: 200px"><b>Laatst aangemeld:</b></td>
                        <td>Laatst aangemeld</td>
                    </tr>
                    <tr style="height: 40px">
                        <td style="width: 200px"><b>Laatst afgemeld:</b></td>
                        <td>Laatst afgemeld</td>
                    </tr>
                    <tr style="height: 40px">
                        <td style="width: 200px"><b>Geregistreerd op:</b></td>
                        <td>Geregistreerd op</td>
                    </tr>
                </table>
                <div class="space20"></div>
                <button type="button" class="btn btn-primary">Terug</button>
            </div>
            <div class="col-md-4">
                    <button type="button" class="btn btn-info">Bewerken</button>
                    <button type="button" class="btn btn-info">Ingevoerde stortingen</button>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>