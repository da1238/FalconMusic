<?php include '../private_html/dbconfig.inc.php';?>
<?php

error_reporting(0);

$perror = $emerror = $aerror = "";

if (isset($_POST['btnSubmit'])) {

    $flag = 0;

    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashpassword = md5($password);


    if (empty($email)) {
        $emerror = "Please Enter An E-mail Address.";
        $aerror = "Please Review The Errors Below.";
        $flag = 1;
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emerror = "Please Enter A Valid E-mail Address.";
    }
    if (empty($password)) {
        $perror = "Please Enter A Password.";
        $flag = 1;
    }

    // Email Check In Database

    $sql = "SELECT * FROM User WHERE Email = :e";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":e", $email);
    $stmt->execute();

    if ($stmt->rowCount() == 0) {
        $emerror = "E-mail Address Doesn't Exist.";
        $flag = 1;
    }

    // Password Check in Database
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $hash = $row['Password'];
    if ($hashpassword == $hash) {
        $flag = 0;
    } else {
        $perror = "Invalid password.";
        $flag = 1;
    }
    if ($flag == 0) {
        return header('Location: http://falconmusic.cs.messiah.edu/homepage.html');
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">-->

    <title>Login - Falcon Music</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/falconmusic.css" rel="stylesheet">

</head>

<body>

<div class="container">
    <div class="col-md-6 mx-auto text-center">
        <div class="header-title">
            <a href="homepage.html"><img src="img/logo.png"/></a>
            <h2 class="wv-heading--subtitle">Falcon Music</h2>
            <i style="color:red"><?php echo $aerror; ?></i>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="myform form ">
                <form action="" method="post">
                    <div class="form-group">
                        <input type="text" name="email"  class="form-control my-input" id="email" placeholder="Email address">
                    </div>
                    <div class="error"><p><?php echo $emerror; ?></p></div>
                    <div class="form-group">
                        <input type="password" name="password"  class="form-control my-input" id="password" placeholder="Password">
                    </div>
                    <div class="error"><p><?php echo $perror; ?></p></div>
                    <div class="forgot">
                        <a href="forgotPassword.html">Forgot password?</a>
                    </div>
                    <div class="text-center ">
                        <button type="submit" name="btnSubmit" class=" btn btn-block send-button tx-tfm">Log In</button>
                    </div>
                    <div class="col-md-12 ">
                        <div class="login-or">
                            <hr class="hr-or">
                            <span class="span-or">.</span>
                        </div>
                    </div>
                    <h6 align="center">Don't have an account?
                    </h6>
                    <div class="form-group">
                        <a class="btn btn-block send-button tx-tfm" href="signup.php">
                            <i class="fa fa-google"></i> Sign Up
                        </a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>


<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
