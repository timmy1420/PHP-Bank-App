<?php
    session_start();
    require 'backend/db.php';
    require 'includes/header.php';

    if(isset($_GET['id'])) {
        $param_id = $_GET['id'];    
    } else {
        exit();
    }

    $sql = "SELECT * FROM users WHERE id = '$param_id'";
    $query = $conn->query($sql);
    $result = $query->fetch_assoc();
    $name = $result['firstname'].' '.$result['lastname'];
?>

<body>
    <!-- Navbar -->
    <?php require 'includes/navbar.php'; ?>
    <!--End Navbar -->


    <div class="container">
        <div class="space70"></div>
        <h1>Transacties: <?php echo $name; ?></h1>

        <div class="row">
            <div class="col-md-12">
                <div class="space30"></div>
                <button type="button" onclick="app.back();" class="btn btn-primary">Terug</button>
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
                            <td>Storting</td>
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

<?php
    require 'includes/footer.php';
?>