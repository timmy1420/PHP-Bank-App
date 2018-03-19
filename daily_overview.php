<?php
    session_start();
    require 'backend/db.php';
    require 'includes/header.php';

    $curdate = date('Y-m-d');
?>

<body>
    <!-- Navbar -->
    <?php require 'includes/navbar.php'; ?>
    <!--End Navbar -->

    <div class="container">
        <div class="space70"></div>
        <h1>Dagoverzicht: <?php echo date('D d-m-Y'); ?></h1>

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
                            <th>Datum</th>
                            <th>Saldo</th>
                            <th>Transactie</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "SELECT transactions.*, clients.firstname, clients.lastname FROM transactions INNER JOIN clients ON clients.id  = transactions.user_id WHERE transactions.created_at = '$curdate'";
                            $query = $conn->query($sql);
                            while($result = $query->fetch_assoc()) {
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
                                $total = Tasks::calculate($cent5, $cent10, $cent25, $cent100, $cent250, $srd5, $srd10, $srd20, $srd50, $srd100);
                        ?>
                        <tr>
                            <td><?php echo $result['firstname']; ?></td>
                            <td><?php echo $result['lastname']; ?></td>
                            <td><?php echo $result['created_at']; ?></td>
                            <td><?php echo $total; ?></td>
                            <td><?php echo ($result['type'] == "withdrawal") ? "Opname" : "Storting"; ?></td>
                            <td>
                                <button type="button" onclick="window.location='transaction_detail.php?id=<?php echo $result['id'] ?>'" class="btn btn-info">Gegevens</button>
                                <button type="button" class="btn btn-danger">Verwijderen</button>
                            </td>
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