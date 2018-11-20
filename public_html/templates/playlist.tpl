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
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{$WEB_URL}css/falconmusic.css" rel="stylesheet">

</head>

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
        <h5 class="modal-title" id="exampleModalLabel">Create a Playlist</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="playlist-name" class="col-form-label">Playlist Name</label>
            <input type="text" class="form-control" id="playlist-name">
          </div>
          <div class="form-group">
            <label for="playlist-genre" class="col-form-label">Playlist Genre</label>
            <input type="text" class="form-control" id="playlist-genre">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save Changes</button>
      </div>
    </div>
  </div>
</div>

<header class="masthead text-center text-white">
  <div class="masthead-content">
    <div class="container">
      <h1 class="masthead-heading mb-0">My Playlists</h1>
      <!--<h2 class="masthead-subheading mb-0">Will Rock Your Socks Off</h2>-->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">+ADD PLAYLIST</button>




    </div>
  </div>
  <div class="bg-circle-1 bg-circle"></div>
  <div class="bg-circle-2 bg-circle"></div>
  <div class="bg-circle-3 bg-circle"></div>
  <div class="bg-circle-4 bg-circle"></div>
</header>



  {if isset($noList)}

    <h4 class="alert alert-danger" style="text-align:center;">You Have No Playlists 	&#x1F61F</h4>

    {else}
    <div class="container">
      <div class="row">
        <section class="wrapperColor">
          <div class="container-fostrap">
            <div class="content">
              <div class="container">
                <div class="row">
    {foreach $Lists as $playlists}
                    <div class="col-xs-12 col-sm-3">
                      <div class="card">
                        <a class="img-card" href="" style="background:#0072AE;">
                          <img src="https://bloximages.chicago2.vip.townnews.com/heraldextra.com/content/tncms/assets/v3/editorial/a/e6/ae63f38e-253d-571e-9f34-811348e79fc5/5b89d430725e6.image.jpg?resize=1200%2C1200">
                        </a>
                        <div class="card-content">
                          <h4 class="card-title">
                            <a href="javascript:;">
                              <a href="view_playlist.php?id={$playlists['Playlist_ID']}">{$playlists['Playlist_Name']}</a>
                            </a>
                          </h4>
                          <p class="">
                            <b># of songs</b>
                          </p>
                        </div>
                      </div>
                    </div>
    {/foreach}
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>



  {/if}


<!-- Footer -->
<footer class="py-5 bg-black">
  <div class="container">
    <p class="m-0 text-center text-white small">Copyright &copy; Your Website 2018</p>
  </div>
  <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
