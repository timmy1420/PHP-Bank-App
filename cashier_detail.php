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
    while($result = $query->fetch_assoc()) {
        $firstname = $result['firstname'];
        $lastname = $result['lastname'];
        $username = $result['username'];
        $last_login = $result['last_login'];
        $last_logout = $result['last_logout'];
        $created_at = $result['created_at'];
    }

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
                        <td><?php echo $firstname; ?></td>
                    </tr>
                    <tr style="height: 40px">
                        <td style="width: 200px"><b>Achternaam:</b></td>
                        <td><?php echo $lastname; ?></td>
                    </tr>
                    <tr style="height: 40px">
                        <td style="width: 200px"><b>Gebruikersnaam:</b></td>
                        <td><?php echo $username; ?></td>
                    </tr>
                    <tr style="height: 40px">
                        <td style="width: 200px"><b>Laatst aangemeld:</b></td>
                        <td><?php echo $last_login; ?></td>
                    </tr>
                    <tr style="height: 40px">
                        <td style="width: 200px"><b>Laatst afgemeld:</b></td>
                        <td><?php echo $last_logout; ?></td>
                    </tr>
                    <tr style="height: 40px">
                        <td style="width: 200px"><b>Geregistreerd op:</b></td>
                        <td><?php echo $created_at; ?></td>
                    </tr>
                </table>
                <div class="space20"></div>
                <button type="button" onclick="app.back();" class="btn btn-primary">Terug</button>
            </div>
            <div class="col-md-4">
                    <a href="edit_cashier.php?id=<?php echo $param_id; ?>" class="btn btn-info">Bewerken</a>
                    <a href="cashier_transactions.php?id=<?php echo $param_id; ?>" class="btn btn-info">Ingevoerde stortingen</a>
            </div>
        </div>
    </div>
    
<?php
    require 'includes/footer.php';
?>