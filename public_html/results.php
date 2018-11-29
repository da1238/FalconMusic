<?php include '../private_html/dbconfig.inc.php';?>

<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="album.js"></script>
    <title>Search Results</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/falconmusic.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">
        <a class="navbar-brand" href="homepage.html">Falcon Music</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <form class="form-inline" action ="" method="post">
            <input name = "searchterm" class="form-control mr-sm-6" type="search" placeholder="Search for an Album" aria-label="Search">
            <button name = "btnSearch" id="button1" class="btn btn-outline-success my-2 my-sm-4" type="submit" style="color:black;">Search</button>
        </form>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="playlist.php">My Playlists</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="album.php">Albums</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="artist.html">Artists</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="song.html">Songs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profile.php">
                        <img src="https://vignette.wikia.nocookie.net/bungostraydogs/images/1/1e/Profile-icon-9.png/revision/latest?cb=20171030104015"
                             alt="" class="" height="20px">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<header class="masthead text-center text-white">
    <div class="masthead-content">
        <div class="container">
            <h1 class="masthead-heading mb-0">Search Results</h1>
        </div>
    </div>
    <div class="bg-circle-1 bg-circle"></div>
    <div class="bg-circle-2 bg-circle"></div>
    <div class="bg-circle-3 bg-circle"></div>
    <div class="bg-circle-4 bg-circle"></div>
</header>


<?php

$searchterm = trim($_POST['searchterm']);

$sql = "SELECT * FROM Album WHERE Album_Name LIKE :s";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(":s", $searchterm);
$stmt->execute();
$result = $stmt->fetchAll();

echo "<p> Number of albums found: ".$stmt->rowCount()."</p>";

if ($stmt->rowCount() > 0) {
    foreach( $result as $row ) {
        echo $row["Album_Name"];
//        echo $row["title"];

    }
} else {
    echo 'No results found. Try again';
}

?>




<!-- Footer -->
<footer class="py-5 bg-black">
    <div class="container">
        <p class="m-0 text-center text-white small">Copyright &copy; Your Website 2018</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

