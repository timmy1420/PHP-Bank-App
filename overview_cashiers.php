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
        <h1>Overzicht caissières</h1>

        <div class="row">
            <div class="col-md-12">
                <div class="space30"></div>
                <a href="overview_clients.php" class="btn btn-success">Clienten overzicht</a>
                <a href="daily_overview.php" class="btn btn-info offset-md-7">Dagoverzicht</a>
                <a href="overview_transactions.php" class="btn btn-success">Transacties</a>
                <div class="space50"></div>

                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Voornaam</th>
                            <th>Achternaam</th>
                            <th>Laatst aangemeld</th>
                            <th>Laatst afgemeld</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "SELECT * FROM users";
                            $query = $conn->query($sql);
                            while($result = $query->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?php echo $result['firstname'] ?></td>
                            <td><?php echo $result['lastname'] ?></td>
                            <td><?php echo $result['last_login'] ?></td>
                            <td><?php echo $result['last_logout'] ?></td>
                            <td>
                                <button type="button" onclick="window.location='cashier_detail.php?id=<?php echo $result['id'] ?>'" class="btn btn-info">Gegevens</button>
                                <!-- <button type="button" class="btn btn-danger">Verwijderen</button> -->
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