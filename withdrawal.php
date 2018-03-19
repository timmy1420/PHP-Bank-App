<?php
    session_start();
    require 'backend/db.php';
    require 'includes/header.php';

    $error = '';

    if(isset($_POST['register'])) {
        $type = 'withdrawal';
        $user_id = $_SESSION['user_id'];
        $client_id = $_POST['client_id'];
        $cent5 = $_POST['cent5'];
        $cent10 = $_POST['cent10'];
        $cent25 = $_POST['cent25'];
        $cent100 = $_POST['cent100'];
        $cent250 = $_POST['cent250'];
        $srd5 = $_POST['srd5'];
        $srd10 = $_POST['srd10'];
        $srd20 = $_POST['srd20'];
        $srd50 = $_POST['srd50'];
        $srd100 = $_POST['srd100'];

        $cent5 = ($cent5 == "") ? 0 : $cent5;
        $cent10 = ($cent10 == "") ? 0 : $cent10;
        $cent25 = ($cent25 == "") ? 0 : $cent25;
        $cent100 = ($cent100 == "") ? 0 : $cent100;
        $cent250 = ($cent250 == "") ? 0 : $cent250;
        $srd5 = ($srd5 == "") ? 0 : $srd5;
        $srd10 = ($srd10 == "") ? 0 : $srd10;
        $srd20 = ($srd20 == "") ? 0 : $srd20;
        $srd50 = ($srd50 == "") ? 0 : $srd50;
        $srd100 = ($srd100 == "") ? 0 : $srd100;

        /**
        * Stuur waarde van de velden als paramaters om de berekening te maken
        * @param int
        * @return float
        * Volle waarde
        */
        $total = Tasks::calculate($cent5, $cent10, $cent25, $cent100, $cent250, $srd5, $srd10, $srd20, $srd50, $srd100);

        // Verifieer of er voldoende saldo is op de client's bankrekening
        $sql_check = "SELECT * FROM clients WHERE id = '$client_id'";
        $query_check = $conn->query($sql_check);
        $leftover = $query_check->fetch_assoc()['balance'];

        $sql = "INSERT INTO transactions (user_id, client_id, type,cent5, cent10, cent25, cent100, cent250, srd5, srd10, srd20, srd50, srd100, prev_balance, created_at) VALUES ('$user_id', '$client_id', '$type', '$cent5', '$cent10', '$cent25', '$cent100', '$cent250', '$srd5', '$srd10', '$srd20', '$srd50', '$srd100', '$leftover', NOW())";
        if($conn->query($sql) && $total < $leftover) {

            // Saldo aftrekken met Opname bedrag
            $sql_client = "UPDATE clients SET balance = balance - $total WHERE id = '$client_id'";
            $conn->query($sql_client);

            // Als de transactie is voltooid, ga naar de clienten overzicht
            header("Location: overview_clients.php");
        } else {
            $error = '<div class="space50"></div>
            <div class="alert alert-dismissible alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <h4 class="alert-heading">Melding!</h4>
                <p class="mb-0">De client heeft onvoldoende saldo op desbetreffende bankrekening. Kies een lager bedrag.</p>
            </div>';
        }
    }
?>

<body>
    <!-- Navbar -->
    <?php require 'includes/navbar.php'; ?>
    <!--End Navbar -->

    <div class="container">
        <div class="space70"></div>
        <center>
            <h2>Opname</h2>
        </center>
        <div class="space50"></div>
        <form id="form_withdrawal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        
        <select name="client_id" class="col-md-4 offset-md-1" required="required">
            <?php
                $sql = "SELECT * FROM clients";
                $query = $conn->query($sql);
                while($result = $query->fetch_assoc()) {
            ?>
            <option value="<?php echo $result['id'] ?>"><?php echo $result['firstname']. ' '.$result['lastname'] ?></option>
            <?php
                }
            ?>
        </select>
        
        <div class="row">
            <div class="col-md-4 offset-md-1">
                    <div class="space40"></div>
                    <div class="form-group">
                        <label class="col-form-label" for="inputDefault">5 cent</label>
                        <input class="form-control" name="cent5" id="cent5" type="text">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="inputDefault">10 cent</label>
                        <input class="form-control" name="cent10" id="cent10" type="text">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="inputDefault">25 cent</label>
                        <input class="form-control" name="cent25" id="cent25" type="text">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="inputDefault">1,- SRD</label>
                        <input class="form-control" name="cent100" id="cent100" type="text">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="inputDefault">2,50 SRD</label>
                        <input class="form-control" name="cent250" id="cent250" type="text">
                    </div>
            </div>
            <div class="col-md-4 offset-md-2">
                <div class="space40"></div>
                <div class="form-group">
                    <label class="col-form-label" for="inputDefault">5,- SRD</label>
                    <input class="form-control" name="srd5" id="srd5" type="text">
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="inputDefault">10,- SRD</label>
                    <input class="form-control" name="srd10" id="srd10" type="text">
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="inputDefault">20,- SRD</label>
                    <input class="form-control" name="srd20" id="srd20" type="text">
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="inputDefault">50,- SRD</label>
                    <input class="form-control" name="srd50" id="srd50" type="text">
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="inputDefault">100,- SRD</label>
                    <input class="form-control" name="srd100" id="srd100" type="text">
                </div>
            </div>
            <p class="offset-md-1"><b>Totaal bedrag:</b> SRD <span id="amount">00.00</span></p>
            <div class="offset-md-5">
                <button type="button" onclick="app.back();" class="btn btn-primary">Terug</button>
                <button id="calculate" type="button" class="btn btn-info">Optellen</button>
                <button name="register" type="submit" class="btn btn-success" disabled>Registreren</button>
            </div>

            </form>
        </div>
        <?php echo $error; ?>
        <div class="space50"></div>
    </div>
<?php
    require 'includes/footer.php';
?>
<script>
    cashiers.withdrawal();
</script>