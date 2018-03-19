<?php
    session_start();
    require 'backend/db.php';
    require 'includes/header.php';

    if(isset($_GET['id'])) {
        $param_id = $_GET['id'];
    } else {
        exit();
    }

    $sql = "SELECT transactions.*, users.firstname AS user_firstname, users.lastname AS user_lastname, clients.firstname AS client_firstname, clients.lastname AS client_lastname FROM transactions 
        INNER JOIN users ON transactions.user_id = users.id 
        INNER JOIN clients ON transactions.client_id = clients.id 
        WHERE transactions.id = '$param_id'";
    $query = $conn->query($sql);
    $result = $query->fetch_assoc();

    $user_firstname = $result['user_firstname'];
    $user_lastname = $result['user_lastname'];
    $client_firstname = $result['client_firstname'];
    $client_lastname = $result['client_lastname'];
    $type = ($result['type'] == "withdrawal") ? "Opname" : "Storting";
    $cent5 = $result['cent5'];
    $cent10 = $result['cent10'];
    $cent25 = $result['cent25'];
    $cent100 = $result['cent100'];
    $cent250 = $result['cent250'];
    $srd5 = $result['srd5'];
    $srd10 = $result['srd10'];
    $srd20 = $result['srd20'];
    $srd50 = $result['srd50'];
    $srd100 = $result['srd100'];
    $date = $result['created_at'];
    $prev_balance = $result['prev_balance'];

    // Bereken de stukken van 5 cent tot en met biljet van SRD 100,-
    $total = Tasks::calculate($cent5, $cent10, $cent25, $cent100, $cent250, $srd5, $srd10, $srd20, $srd50, $srd100);
    
?>

<body>
    <!-- Navbar -->
    <?php require 'includes/navbar.php'; ?>
    <!--End Navbar -->

    <div class="container">
        <div class="space70"></div>
        <center>
            <h2>Transactie gegevens</h2>
        </center>
        <div class="space50"></div>
        <div class="col-md-4 offset-md-1">
            <table>
                <tr>
                    <td style="width:105px;"><b>Naam: </b></td>
                    <td><?php echo $client_firstname.' '.$client_lastname; ?></td>
                </tr>
                <tr>
                    <td style="width:105px;"><b>Caissière: </b></td>
                    <td><?php echo $user_firstname.' '.$user_lastname; ?></td>
                </tr>
                <tr>
                    <td style="width:105px;"><b>Type: </b></td>
                    <td><?php echo $type; ?></td>
                </tr>
                <tr>
                    <td style="width:105px;"><b>Vorig bedrag: </b></td>
                    <td><?php echo $prev_balance; ?></td>
                </tr>
                <tr>
                    <td style="width:105px;"><b>Datum: </b></td>
                    <td><?php echo $date; ?></td>
                </tr>
            </table>
        </div>
        
        <div class="row">
            <div class="col-md-4 offset-md-1">
                <div class="space40"></div>
                <div class="form-group">
                    <label class="col-form-label" for="inputDefault">5 cent</label>
                    <input class="form-control" value="<?php echo $cent5; ?>" type="text">
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="inputDefault">10 cent</label>
                    <input class="form-control" value="<?php echo $cent10; ?>" type="text">
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="inputDefault">25 cent</label>
                    <input class="form-control" value="<?php echo $cent25; ?>" type="text">
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="inputDefault">1,- SRD</label>
                    <input class="form-control" value="<?php echo $cent100; ?>" type="text">
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="inputDefault">2,50 SRD</label>
                    <input class="form-control" value="<?php echo $cent250; ?>" type="text">
                </div>
            </div>
            <div class="col-md-4 offset-md-2">
                <div class="space40"></div>
                <div class="form-group">
                    <label class="col-form-label" for="inputDefault">5,- SRD</label>
                    <input class="form-control" value="<?php echo $srd5; ?>" type="text">
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="inputDefault">10,- SRD</label>
                    <input class="form-control" value="<?php echo $srd10; ?>" type="text">
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="inputDefault">20,- SRD</label>
                    <input class="form-control" value="<?php echo $srd20; ?>" type="text">
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="inputDefault">50,- SRD</label>
                    <input class="form-control" value="<?php echo $srd50; ?>" type="text">
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="inputDefault">100,- SRD</label>
                    <input class="form-control" value="<?php echo $srd100; ?>" type="text">
                </div>
            </div>
            <p class="offset-md-1"><b>Totaal bedrag:</b> SRD <span id="amount"><?php echo $total; ?></span></p>
        </div>
        <div class="offset-md-10">
            <button type="button" onclick="app.back();" class="btn btn-primary">Terug</button>
        </div>
        <div class="space50"></div>
    </div>
<?php
    require 'includes/footer.php';
?>
<script>
    cashiers.withdrawal();
</script>