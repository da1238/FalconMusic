<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Playlists - Falcon Music</title>

    <!-- Bootstrap core CSS -->
    <link href="{$WEB_URL}vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Custom styles for this template -->
    <link href="{$WEB_URL}css/falconmusic.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">
        <a class="navbar-brand" href="../homepage.html">Falcon Music</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <form class="form-inline">
            <input class="form-control mr-sm-6" type="search" placeholder="Search for a playlist" aria-label="Search">
            <button id="button1" class="btn btn-outline-success my-2 my-sm-4" type="submit">Search</button>
        </form>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="playlist.php?">My Playlists</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../album.html">Albums</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../artist.html">Artists</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../song.html">Songs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../signup.html">Sign Up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../login.html">Log In</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Song</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <input type="hidden" name="playlist_id">
                        <select name="songList">
                            {foreach $songs as $song}
                                <option value="{$song['Song_ID']}">{$song['Title']}</option>
                            {/foreach}
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Send message</button>
            </div>
        </div>
    </div>
</div>

<div class="image-wrap">
    <div>
        <div class="img-content">
            <img src="http://kiim.net/wp-content/uploads/2014/06/johnmayer_norwegianwood6.jpg" alt="">
        </div>
    </div>
    <div class="overlay"></div>
</div>

<!--
<div class="banner-content">


</div>
-->
<section>
    <div class="container">
        <div class="row align-items-right">
            <div class="col-lg-6 order-lg-1">
                <form class="p-6">
                    <h2><b>Created by: </b>{$user_name}</h2>
                    <h2 class="display-4">{$playlist_name}</h2>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">+ADD SONG</button>
                    <button type="button" class="btn btn-primary">REMOVE SELECTED SONGS</button>
                </form>
            </div>
        </div>
        <div class="col-lg-6 order-lg-1">
            <div class="p-5">
                {foreach $Lists as $song}
                    <h3>{$song['Title']}</h3>
                {/foreach}
            </div>
        </div>
    </div>
</section>


<!-- Footer -->
<footer class="py-5 bg-black">
    <div class="container">
        <p class="m-0 text-center text-white small">Copyright &copy; Falcon Music 2018</p>
    </div>

    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
