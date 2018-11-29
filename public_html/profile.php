<?php

error_reporting(0);

$perror = $fnerror = $lnerror = $emerror = "";

if (isset($_POST['btnPass'])) {
    $flag = 0;
    $password = $_POST['password'];
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

    if($flag == 0){

    }
}

if (isset($_POST['btnSave'])) {
    $flag = 0;
    $username = $_POST['user_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    if (empty($username)) {
        $uerror = "Please Enter A User Name.";
        $flag = 1;
    }
    if (empty($phone)) {
        $pherror = "Please Enter A Phone Number.";
        $flag = 1;
    }
    if (empty($email)) {
        $emerror = "Please Enter An Email.";
        $flag = 1;
    }
    if($flag == 0){

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

    <title>Profile | Falcon Music</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/falconmusic.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">
        <a class="navbar-brand" href="homepage.html">Falcon Music</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="playlist.php">My Playlists</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="album.html">Albums</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="artist.html">Artists</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="song.html">Songs</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="vertical-center">
<div class="container">
    <br>
    <br>
    <div class="row" id="main">
        <div class="col-md-4 well" id="leftPanel">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <img src="https://vignette.wikia.nocookie.net/bungostraydogs/images/1/1e/Profile-icon-9.png/revision/latest?cb=20171030104015"
                             alt="" class="" height="200px">
                        <br>
                        <h2>AppleSeed10092</h2>
                        <p>Bio</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8 well" id="rightPanel">
            <div class="row">
                <div class="col-md-12">
                    <h2>Edit Profile</h2>
                        <hr class="colorgraph">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <form action="" method="post">
                                <div class="form-group">
                                    <input type="text" name="user_name" id="user_name" class="form-control input-lg" placeholder="User Name" tabindex="1">
                                    <div class="error"><p><?php echo $uerror; ?></p></div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="phone" id="phone" class="form-control input-lg" placeholder="Phone Number" tabindex="2">
                                    <div class="error"><p><?php echo $pherror; ?></p></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4">
                            <div class="error"><p><?php echo $emerror; ?></p></div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
                                    <div class="error"><p><?php echo $perror; ?></p></div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <button type="submit" name ="btnPass" class= "btn btn-block send-button tx-tfm">Change Password</button>
                            </div>
                        </div>
                            <div class="form-group">
                                <button type="submit" name = "btnSave" class= "btn btn-success green">Save Changes</button>
                            </div>
                    </form>
                </div>
            </div>
            </div>
        </div>
</div>
</div>



<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
