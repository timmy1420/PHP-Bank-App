<?php
    session_start();
    require 'backend/db.php';
    require 'includes/header.php';

    echo $_SESSION['user_id'];
?>

<body>
    <!-- Navbar -->
    <?php require 'includes/navbar.php'; ?>
    <!--End Navbar -->

    <div class="container">
        <div class="space70"></div>
        <h1>Overzicht clienten</h1>
        <div class="space10"></div>
        
        <div class="row">
            <div class="col-md-12">
                <?php echo ($_SESSION['user_type'] == 'cashier') ? '<a href="deposit.php" class="btn btn-success">Storten</a><a href="withdrawal.php" class="btn btn-success pull-right offset-md-10">Opname</a>' : ''; ?>
                <div class="space20"></div>

                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Voornaam</th>
                            <th>Achternaam</th>
                            <th>Rekeningnummer</th>
                            <?php echo ($_SESSION['user_type'] == 'admin') ? '<th>Saldo</th>' : ''; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "SELECT * FROM clients";
                            $query = $conn->query($sql);
                            while($result = $query->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?php echo $result['firstname']; ?></td>
                            <td><?php echo $result['lastname']; ?></td>
                            <td><?php echo $result['accountnumber']; ?></td>
                            <?php echo ($_SESSION['user_type'] == 'admin') ? '<td>SRD'.$result['balance'].'</td>' : ''; ?>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php
    require 'includes/footer.php';
?>