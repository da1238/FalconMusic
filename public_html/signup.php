<?php include '../private_html/dbconfig.inc.php'; ?>
<?php

error_reporting(0);

$uerror = $perror = $emerror = $pherror = $perror = $cperror = $gerror = $aerror = "";

if (isset($_POST['btnSubmit'])) {

    $flag = 0;

    $userName = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmpassword'];
    $hashpassword = md5($password);
    $gender = $_POST['radios'];

    if (empty($userName)) {
        $uerror = "Please Enter A Username.";
        $aerror = "Please Review The Errors Below.";
        $flag = 1;
    }
    if (empty($email)) {
        $emerror = "Please Enter An E-mail Address.";
        $flag = 1;
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emerror = "Please Enter A Valid E-mail Address.";
    }
    if (empty($phone)) {
        $pherror = "Please Enter A Phone Number.";
        $flag = 1;
    } else if (!preg_match("/^[\d]*$/", $phone)) {
        $pherror = "Please Enter A Valid Phone Number.";
    }
    if (empty($password)) {
        $perror = "Please Enter A Password.";
        $flag = 1;
    }
    if (strlen(($password) <= '8')) {
        $perror = "Your Password Must Contain At Least 8 Characters.";
        $flag = 1;
    }
    if (!preg_match("#[0-9]+#", $password)) {
        $perror = "Your Password Must Contain At Least 1 Number.";
        $flag = 1;
    }
    if (!preg_match("#[A-Z]+#", $password)) {
        $perror = "Your Password Must Contain At Least 1 Capital Letter.";
        $flag = 1;
    }
    if (!preg_match("#[a-z]+#", $password)) {
        $perror = "Your Password Must Contain At Least 1 Lowercase Letter.";
        $flag = 1;
    }
    if (empty($confirmPassword)) {
        $cperror = "Please Confirm Your Password.";
        $flag = 1;
    }
    if ($password != $confirmPassword) {
        $perror = "Passwords Do Not Match.";
        $flag = 1;
    }
    if (empty($gender)) {
        $gerror = "Please Select An Option.";
        $flag = 1;
    }
    $sql = "SELECT * FROM User WHERE Email = :e";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":e", $email);
    $stmt->execute();

    if ($stmt->rowCount() == 1) {
        $emerror = "E-mail Address Already In Use. Please Try Again.";
        $flag = 1;
    }

    if ($flag == 0) {
        $sql = "INSERT INTO `User` (`User_ID`, `Password`, `Salt`, `Username`, `Phone_No`, `Email`, `Gender`, `Is_Admin`)
              VALUES (NULL, '$hashpassword', NULL, '$userName', '$phone', '$email', '$gender', '0')";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        return header('Location: http://falconmusic.cs.messiah.edu/login.php');
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Sign up - Falcon Music</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i"
          rel="stylesheet">

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
            <div class="signUpForm">
                <form action="" method="post">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control my-input" id="name" placeholder="Username">
                        <div class="error"><p><?php echo $uerror; ?></p></div>
                    </div>
                    <div class="form-group">
                        <input type="" name="email" class="form-control my-input" id="email"
                               placeholder="Email address">
                        <div class="error"><p><?php echo $emerror; ?></p></div>
                    </div>

                    <div class="form-group">
                        <input type="" min="0" name="phone" id="phone" class="form-control my-input"
                               placeholder="Phone">
                        <div class="error"><p><?php echo $pherror; ?></p></div>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control my-input" id="password"
                               placeholder="Password">
                        <span class="help-block"><p>Password must contain at least 8 characters,
                                one capital letter, and one number.</p></span>
                        <div class="error"><p><?php echo $perror; ?></p></div>
                    </div>
                    <div class="form-group">
                        <input type="password" name="confirmpassword" class="form-control my-input" id="confirmpassword"
                               placeholder="Confirm password">
                        <div class="error"><p><?php echo $cperror; ?></p></div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="radios"></label>
                        <div class="col-md-8">
                            <label class="radio-inline" for="radios-0">
                                <input type="radio" name="radios" id="radios-0" value="Male">
                                Male
                            </label>
                            <label class="radio-inline" for="radios-1">
                                <input type="radio" name="radios" id="radios-1" value="Female">
                                Female
                            </label>
                            <label class="radio-inline">
                                <div class="error"><p><?php echo $gerror; ?></p></div>
                            </label>
                        </div>
                    </div>
                    <div class="text-center ">
                        <button type="submit" name="btnSubmit" class=" btn btn-block send-button tx-tfm">Sign Up
                        </button>
                    </div>

                    <div class="col-md-12 ">
                        <div class="login-or">
                            <hr class="hr-or">
                            <span class="span-or">.</span>
                        </div>
                    </div>
                    <h6 align="center">Already have an account?
                    </h6>
                    <div class="form-group">
                        <a class="btn btn-block send-button tx-tfm" href="login.php">
                            <i class="fa fa-google"></i> Log In
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

