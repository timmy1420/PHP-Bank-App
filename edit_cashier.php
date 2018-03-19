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
    }

    if(isset($_POST['save'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $username = $_POST['username'];
        $password1 = $_POST['password1'];
        $password2 = $_POST['password2'];

        $sql = "UPDATE users SET firstname = '$firstname', lastname = '$lastname', username = '$username' WHERE id = '$param_id'";
        if($conn->query($sql)) {
            header("Location: cashier_detail.php?id=".$param_id);
        } else {
            echo mysqli_error($conn);
        }
    }

    

?>

<body>
    <!-- Navbar -->
    <?php require 'includes/navbar.php'; ?>
    <!--End Navbar -->

    <div class="container">
        <div class="space70"></div>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="<?php echo $_SERVER['PHP_SELF'].'?id='.$param_id; ?>" method="POST">
                    <fieldset>
                        <center><h2>Caissière bewerken</h2></center>
                        <div class="space30"></div>
                        <div class="form-group">
                            <label class="col-form-label" for="inputDefault">Voornaam</label>
                            <input class="form-control" value="<?php echo $firstname; ?>" id="firstname" name="firstname" type="text">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="inputDefault">Achternaam</label>
                            <input class="form-control" value="<?php echo $lastname; ?>" id="lastname" name="lastname" type="text">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="inputDefault">Gebruikersnaam</label>
                            <input class="form-control" value="<?php echo $username; ?>" id="username" name="username" type="text">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="inputDefault">Wachtwoord</label>
                            <input class="form-control" id="password1" name="password1" type="text">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="inputDefault">Wachtwoord herhalen:</label>
                            <input class="form-control" id="password2" name="password2" type="text">
                        </div>
                        <div class="space20"></div>
                        <button type="button" onclick="app.back();" class="btn btn-primary">Terug</button>
                        <button name="save" type="submit" class="btn btn-success">Opslaan</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>

<?php
    require 'includes/footer.php';
?>