<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>JS Canvas Game | Startseite</title>
  <link rel="stylesheet" href="assets/css/index.css">
</head>

<body>
  <nav>
    <div class="nav-wrapper grey darken-4">
      <a class="brand-logo">JS Canvas Game</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="game.php">Zum Spiel</a></li>
        <li><a href="scoreboard.php">ScoreBoard</a></li>
      </ul>
    </div>
  </nav>
  <ul class="sidenav" id="mobile-demo">
    <li><a href="game.php">Zum Spiel</a></li>
    <li><a href="scoreboard.php">ScoreBoard</a></li>
  </ul>
  <div id="content">
    <h2>JS Canvas Game</h2>
    <h3>Hosted by <a href="https://bero-host.de/">Bero-Host</a></h3>
  </div>
  <footer class="page-footer grey darken-4">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text bold">Information</h5>
          <p class="grey-text text-lighten-4">Dieses Spiel wurde in JavaScript basierend auf einem Canvas Element erstellt. Falls Sie sich für unseren SourceCode interessieren, klicken Sie auf diese <a href="https://github.com/kallifabio/JS-Canvas-Game" class="waves-effect white-text bold">Seite</a>. Dieser wird Ihnen jederzeit zur Verfügung stehen.</p>
        </div>
        <div class="col l4 offset-l2 s12">
          <h5 class="white-text bold">Social Media</h5>
          <ul>
            <li><a class="waves-effect pink-text bold" href="https://www.instagram.com/pascal190901/">Instagram (Privat)</a></li>
            <li><a class="waves-effect pink-text bold" href="https://www.instagram.com/gamer_kidd_lp/">Instagram (YouTube)</a></li>
            <li><a class="waves-effect red-text text-darken-1 bold" href="https://www.youtube.com/@gamer_kidd_lp">YouTube</a></li>
            <li><a class="waves-effect blue-text text-darken-2 bold" href="https://www.facebook.com/pascal.nitschke">FaceBook</a></li>
            <li><a class="waves-effect blue-text bold" href="https://twitter.com/kallifabio">Twitter</a></li>
            <li><a class="yellow-text bold">Snapchat: pascal190901</a></li>
            <li><a class="waves-effect purple-text text-darken-1 bold" href="https://www.twitch.tv/gamer_kidd_lp">Twitch</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright white-text">
      <div class="container">
        Copyright © 2022-2023 Pascal Nitschke - All Rights Reserved
        <a href="agb.php" class="waves-effect white-text right">Datenschutzerklärung</a>
        <a class="grey-text text-darken-4 grey darken-4 right" style="cursor: default;">TestTestTestTest</a>
        <a href="impressum.php" class="waves-effect white-text right">Impressum</a>
      </div>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <!--JavaScript at end of body for optimized loading-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('.sidenav').sidenav();
    });
  </script>
</body>

</html>