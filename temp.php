<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test file</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.plyr.io/3.6.2/plyr.css">
</head>

<body>
  <div class="container">
    <h1>Shopping Cart</h1>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Product 1</h5>
        <p class="card-text">Description of Product 1.</p>
        <audio src="audio_files/Every Indian Podcast Ever ft Dostcast  Salonayyy  Saloni Gaur.mp3.mp3" id="audio1" controls></audio>
        <button class="btn btn-primary" onclick="togglePlay('audio1')">Play/Pause</button>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Product 2</h5>
        <p class="card-text">Description of Product 2.</p>
        <audio src="./audio_files/Snipers In War.mp3" id="audio2" controls></audio>
        <button class="btn btn-primary" onclick="togglePlay('audio2')">Play/Pause</button>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Product 3</h5>
        <p class="card-text">Description of Product 2.</p>
        <audio id="player" controls>
          <source src="audio_files/Pakistans REAL Situation Declining Economy  Terrorism.mp3" type="audio/mp3">
        </audio>
        <!-- Add Play and Pause buttons -->
        <button class="btn btn-primary" id="playButton">Play</button>
        <button class="btn btn-primary" id="pauseButton">Pause</button>
      </div>
    </div>
  </div>
  <script>
    function togglePlay(id) {
      var audio = document.getElementById(id);
      if (audio.paused) {
        audio.play();
      } else {
        audio.pause();
      }
    }
  </script>
  <!-- Load the Plyr library and initialize it -->
  <script src="https://cdn.plyr.io/3.6.2/plyr.js"></script>
  <script>
    const player = new Plyr('#player');

    // Get the play and pause buttons
    const playButton = document.getElementById("playButton");
    const pauseButton = document.getElementById("pauseButton");

    // Add event listeners to the buttons
    playButton.addEventListener("click", function() {
      player.play();
    });

    pauseButton.addEventListener("click", function() {
      player.pause();
    });
  </script>
</body>

</html>