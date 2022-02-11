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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js" integrity="sha512-H6cPm97FAsgIKmlBA4s774vqoN24V5gSQL4yBTDOY2su2DeXZVhQPxFK4P6GPdnZqM9fg1G3cMv5wD7e6cFLZQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="assets/js/game.js"></script>
  <!--JavaScript at end of body for optimized loading-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>