<?php
require_once 'mysql/connection.php'
?>
<!DOCTYPE html>
<html lang="de" dir="ltr">

<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>JS Canvas Game | Play Game</title>
  <link rel="stylesheet" href="assets/css/game.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <div class="fixed text-white text-sm ml-2 mt-1 select-none">
    <span>Punkte:</span>
    <span id="scoreEl">0</span>
  </div>
  <div class="fixed inset-0 flex items-center justify-center" id="modalEl">
    <div class="bg-white max-w-md w-full p-6 text-center radius">
      <p class="text-gray-700">Du hast</p>
      <h1 class="text-4xl font-bold leading-none" id="bigScoreEl">0</h1>
      <p class="text-gray-700 mb-4">Punkte erreicht</p>
      <div>
        <button class="bg-blue-500 text-white w-full py-2 rounded-full text-sm mb-4" id="startGameBTN">Spiel starten</button>
        <a href="index.php" class="bg-blue-500 text-white w-full py-2 rounded-full text-sm btn" id="backBTN">Zur Startseite</a>
      </div>
    </div>
  </div>
  <canvas></canvas>
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
            <li><a class="waves-effect pink-text bold" href="https://www.instagram.com/pascal190901/">Instagram</a></li>
            <li><a class="waves-effect red-text text-darken-1 bold" href="https://www.youtube.com/channel/UCSfz3_mxmqbkUkfsgirj8qg">YouTube</a></li>
            <li><a class="waves-effect blue-text text-darken-2 bold" href="https://www.facebook.com/pascal.nitschke">FaceBook</a></li>
            <li><a class="waves-effect blue-text bold" href="https://twitter.com/kallifabio">Twitter</a></li>
            <li><a class="yellow-text bold">Snapchat: pascal190901</a></li>
            <li><a class="waves-effect purple-text text-darken-1 bold" href="https://www.twitch.tv/gamer_kidd_lp">Twitch</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        Copyright © 2022 Pascal Nitschke - All Rights Reserved
        <a href="https://kallifabio.net/impressum" class="waves-effect white-text right">Impressum</a>
      </div>
    </div>
  </footer>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js" integrity="sha512-H6cPm97FAsgIKmlBA4s774vqoN24V5gSQL4yBTDOY2su2DeXZVhQPxFK4P6GPdnZqM9fg1G3cMv5wD7e6cFLZQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="assets/js/game.js"></script>
  <!--JavaScript at end of body for optimized loading-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>