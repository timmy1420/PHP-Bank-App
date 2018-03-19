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
        <h1>Overzicht clienten</h1>
        
        <div class="row">
            <div class="col-md-12">
                <button type="button" class="btn btn-success pull-right offset-md-11">Opname</button>
                <div class="space20"></div>

                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Voornaam</th>
                            <th>Achternaam</th>
                            <th>...</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "SELECT * FROM clients";
                            $query = $conn->query($sql);
                            while($result = $query->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?php echo $result['firstname'] ?></td>
                            <td><?php echo $result['lastname'] ?></td>
                            <td>
                                <button type="button" class="btn btn-primary">Iets</button>
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


    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>