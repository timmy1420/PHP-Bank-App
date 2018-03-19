<?php
    session_start();
    require 'backend/db.php';
    require 'includes/header.php';

    $error = "";

    if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $query = $conn->query($sql);
        if($query->num_rows == 1) {
            $result =  $query->fetch_assoc();
            $user_type = $result['user_type'];
            $user_id = $result['id'];

            // Set session data
            $_SESSION['user_type'] = $user_type;
            $_SESSION['user_id'] = $user_id;

            // Update user time
            $sql_update = "UPDATE users SET last_login = NOW() WHERE username = '$username' AND password = '$password'";
            $conn->query($sql_update);

            

            switch($user_type) {
                case 'admin':
                    header("Location: overview_cashiers.php");
                    break;
                case 'cashier':
                    header("Location: overview_clients.php");
                default:
                    header("Location: overview_clients.php");
            }
        } else {
            $error = '<div class="alert alert-dismissible alert-danger">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <h4 class="alert-heading">Fout opgetreden!</h4>
            <p class="mb-0">De ingevoerde gegevens zijn incorrect. Deze dient u juist in te voeren zodat dit systeem u kan identificeren.</p>
        </div>';
        }
    }
?>

<body>
    <!-- Navbar -->
    <div class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="">Bank Systeem</a>
        </div>
    </div>
    <!--End Navbar -->

    <div class="container">
        <div class="space70"></div>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <fieldset>
                        <center><h2>Aanmelden</h2></center>
                        <div class="space40"></div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Gebruikersnaam:</label>
                            <input class="form-control" name="username" type="text">
                            <small id="emailHelp" class="form-text text-muted">Dit systeem is confidentieel.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Wachtwoord:</label>
                            <input class="form-control" placeholder="*****" name="password" type="password">
                        </div>
                        <button name="login" type="submit" class="btn btn-primary">Aanmelden</button>
                    </fieldset>
                </form>
                <div class="space30"></div>
                <?php echo $error; ?>
            </div>
        </div>
        
    </div>

    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>