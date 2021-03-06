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
    <title>My Albums</title>

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
        <form class="form-inline" action ="results.php" method="post">
            <input name="searchterm" class="form-control mr-sm-6" type="search" placeholder="Search for an Album" aria-label="Search">
            <button name="btnSearch" id="button1" class="btn btn-outline-success my-2 my-sm-4" type="submit" style="color:black;">Search</button>
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
            <h1 class="masthead-heading mb-0">Albums</h1>
        </div>
    </div>
    <div class="bg-circle-1 bg-circle"></div>
    <div class="bg-circle-2 bg-circle"></div>
    <div class="bg-circle-3 bg-circle"></div>
    <div class="bg-circle-4 bg-circle"></div>
</header>
<div class="row">
    <div class="col-md-4 mx-auto text-center">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id="addalbum">
            + New Album
        </button>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Create New Album</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <input type="text" name="Albumname"  class="form-control my-input" id="albumName" placeholder="Album Name">
                            </div>
                            <div class="form-group">
                                <input type="text" name="Albumartist"  class="form-control my-input" id="albumArtist" placeholder="Artist">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="details-card">
    <div class="container">
        <div class="row">
            <section class="wrapperColor">
                <div class="container-fostrap">
                    <div class="content">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-3">
                                    <div class="card">
                                        <a class="img-card" href="" style="background:#0072AE;">
                                            <img src= "https://upload.wikimedia.org/wikipedia/en/thumb/4/49/Red_Pill_Blues_cover.png/220px-Red_Pill_Blues_cover.png">
                                        </a>
                                        <div class="card-content">
                                            <h4 class="card-title">
                                                <a href="javascript:;">
                                                    Red Pill Blues
                                                </a>
                                            </h4>
                                            <p class="">
                                                <b>Maroon 5</b>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3">
                                    <div class="card">
                                        <a class="img-card" href="javascript:;" style="background:;">
                                            <img src="https://upload.wikimedia.org/wikipedia/en/thumb/c/cb/JohnMayerTSfE.jpg/220px-JohnMayerTSfE.jpg">

                                        </a>
                                        <div class="card-content">
                                            <h4 class="card-title">
                                                <a href="view_artist.html">
                                                    The Search for Everything
                                                </a>
                                            </h4>
                                            <p class="">
                                                <b>John Mayer</b>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3">
                                    <div class="card">
                                        <a class="img-card" href="javascript:;" style="background:#F1F1F1;">
                                            <img src="https://images-na.ssl-images-amazon.com/images/I/51y9BzksK9L.jpg">

                                        </a>
                                        <div class="card-content">
                                            <h4 class="card-title">
                                                <a href="javascript:;">
                                                    Smoke + Mirrors
                                                </a>
                                            </h4>
                                            <p class="">
                                                <b>Imagine Dragons</b>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3">
                                    <div class="card">
                                        <a class="img-card" href="javascript:;" style="background:#626265;">
                                            <img src="http://cdn.shopify.com/s/files/1/0993/9646/products/AFTMB002671602CD.jpg?v=1494529085">

                                        </a>
                                        <div class="card-content">
                                            <h4 class="card-title">
                                                <a href="javascript:;">
                                                    DAMN.
                                                </a>
                                            </h4>
                                            <p class="">
                                                <b>Kendrick Lamar</b>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <section class="wrapperColor">
                <div class="container-fostrap">
                    <div class="content">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-3">
                                    <div class="card">
                                        <a class="img-card" href="javascript:;" style="background:#0072AE;">
                                            <img src="https://upload.wikimedia.org/wikipedia/en/thumb/0/03/Darkness_and_Light.jpg/220px-Darkness_and_Light.jpg">

                                        </a>
                                        <div class="card-content">
                                            <h4 class="card-title">
                                                <a href="javascript:;">
                                                    Darkness and Light
                                                </a>
                                            </h4>
                                            <p class="">
                                                <b>John Legend</b>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3">
                                    <div class="card">
                                        <a class="img-card" href="javascript:;" style="background:#FF6702;">
                                            <img src="https://upload.wikimedia.org/wikipedia/en/thumb/9/9b/Funk_Wav_Bounces_1.jpg/220px-Funk_Wav_Bounces_1.jpg">

                                        </a>
                                        <div class="card-content">
                                            <h4 class="card-title">
                                                <a href="javascript:;">
                                                    Funk Wav Bounces Vol. 1
                                                </a>
                                            </h4>
                                            <p class="">
                                                <b>Calvin Harris</b>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3">
                                    <div class="card">
                                        <a class="img-card" href="javascript:;" style="background:#F1F1F1;">
                                            <img src="https://upload.wikimedia.org/wikipedia/en/thumb/9/96/Adele_-_25_%28Official_Album_Cover%29.png/220px-Adele_-_25_%28Official_Album_Cover%29.png">

                                        </a>
                                        <div class="card-content">
                                            <h4 class="card-title">
                                                <a href="javascript:;">
                                                    25
                                                </a>
                                            </h4>
                                            <p class="">
                                                <b>Adele</b>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3">
                                    <div class="card">
                                        <a class="img-card" href="javascript:;" style="background:#626265;">
                                            <img src="https://upload.wikimedia.org/wikipedia/en/thumb/e/e0/Head_Over_Heels_Chromeo.jpg/220px-Head_Over_Heels_Chromeo.jpg">

                                        </a>
                                        <div class="card-content">
                                            <h4 class="card-title">
                                                <a href="javascript:;">
                                                 Head Over Heels
                                                </a>
                                            </h4>
                                            <p class="">
                                                <b>Chromeo</b>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="container">
                <div class="row">
                    <section class="wrapperColor">
                        <div class="container-fostrap">
                            <div class="content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-3">
                                            <div class="card">
                                                <a class="img-card" href="view_album.html" style="background:#0072AE;">
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/thumb/2/2c/Staying_at_Tamara%27s_%28album%29.png/220px-Staying_at_Tamara%27s_%28album%29.png">

                                                </a>
                                                <div class="card-content">
                                                    <h4 class="card-title">
                                                        <a href="javascript:;">
                                                            Staying at Tamara's
                                                        </a>
                                                    </h4>
                                                    <p class="">
                                                        <b>George Ezra</b>
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-3">
                                            <div class="card">
                                                <a class="img-card" href="javascript:;" style="background:#FF6702;">
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/thumb/b/b9/Freudian_by_Daniel_Caesar.jpg/220px-Freudian_by_Daniel_Caesar.jpg">

                                                </a>
                                                <div class="card-content">
                                                    <h4 class="card-title">
                                                        <a href="javascript:;">
                                                          Freudian
                                                        </a>
                                                    </h4>
                                                    <p class="">
                                                        <b>Daniel Caesar</b>
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-3">
                                            <div class="card">
                                                <a class="img-card" href="javascript:;" style="background:#F1F1F1;">
                                                    <img src="https://ssl.ulximg.com/image/750x750/cover/1539930528_a76534008fb2d981177cd6e1b515414c.jpg/7ecc346302e82a3c3048c65e028e502b/1539930528_248ed42f7b3b48cc2b911f521b202a38.jpg">

                                                </a>
                                                <div class="card-content">
                                                    <h4 class="card-title">
                                                        <a href="javascript:;">
                                                        Being Human In Public
                                                        </a>
                                                    </h4>
                                                    <p class="">
                                                        <b>Jessie Reyez</b>
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-3">
                                            <div class="card">
                                                <a class="img-card" href="javascript:;" style="background:#626265;">
                                                    <img src="https://t2.genius.com/unsafe/300x300/https%3A%2F%2Fimages.genius.com%2F7eb1ca125e7ca8aaf5e52f8cc99f6794.1000x1000x1.jpg">

                                                </a>
                                                <div class="card-content">
                                                    <h4 class="card-title">
                                                        <a href="javascript:;">
                                                            VHS 2.0
                                                        </a>
                                                    </h4>
                                                    <p class="">
                                                        <b>X Ambassadors</b>
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <div class="container">
                        <div class="row">
                            <section class="wrapperColor">
                                <div class="container-fostrap">
                                    <div class="content">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-3">
                                                    <div class="card">
                                                        <a class="img-card" href="javascript:;" style="background:#0072AE;">
                                                            <img src="https://upload.wikimedia.org/wikipedia/en/thumb/2/2f/Natural_Causes_album.jpg/220px-Natural_Causes_album.jpg">

                                                        </a>
                                                        <div class="card-content">
                                                            <h4 class="card-title">
                                                                <a href="javascript:;">
                                                                    Natural Causes
                                                                </a>
                                                            </h4>
                                                            <p class="">
                                                                <b>Skylar Grey</b>
                                                            </p>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-3">
                                                    <div class="card">
                                                        <a class="img-card" href="javascript:;" style="background:#FF6702;">
                                                            <img src="https://upload.wikimedia.org/wikipedia/en/thumb/7/7a/Macklemore_Gemini.png/220px-Macklemore_Gemini.png">

                                                        </a>
                                                        <div class="card-content">
                                                            <h4 class="card-title">
                                                                <a href="javascript:;">
                                                                    Gemini
                                                                </a>
                                                            </h4>
                                                            <p class="">
                                                                <b>Macklemore</b>
                                                            </p>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-3">
                                                    <div class="card">
                                                        <a class="img-card" href="javascript:;" style="background:#F1F1F1;">
                                                            <img src="https://upload.wikimedia.org/wikipedia/en/1/1b/Lauv_-_I_Like_Me_Better.png">

                                                        </a>
                                                        <div class="card-content">
                                                            <h4 class="card-title">
                                                                <a href="javascript:;">
                                                                    I Like Me Better
                                                                </a>
                                                            </h4>
                                                            <p class="">
                                                                <b>Lauv</b>
                                                            </p>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-3">
                                                    <div class="card">
                                                        <a class="img-card" href="javascript:;" style="background:#626265;">
                                                            <img src="https://images-na.ssl-images-amazon.com/images/I/71bJrvL%2BvmL._SX355_.jpg">

                                                        </a>
                                                        <div class="card-content">
                                                            <h4 class="card-title">
                                                                <a href="javascript:;">
                                                                    Weirdo

                                                                </a>
                                                            </h4>
                                                            <p class="">
                                                                <b>Donald Glover</b>
                                                            </p>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>

                        <div class="clearfix">
                            <div class="hint-text">Showing <b>16</b> out of <b>25</b> entries</div>
                            <ul class="pagination">
                                <li class="page-item disabled"><a href="#">Previous</a></li>
                                <li class="page-item"><a href="#" class="page-link">1</a></li>
                                <li class="page-item"><a href="#" class="page-link">2</a></li>
                                <li class="page-item active"><a href="#" class="page-link">3</a></li>
                                <li class="page-item"><a href="#" class="page-link">4</a></li>
                                <li class="page-item"><a href="#" class="page-link">5</a></li>
                                <li class="page-item"><a href="#" class="page-link">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


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
