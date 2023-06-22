<div class="music-player">
    <button id="playButton" class="play-button"><i class="fa-solid fa-play"></i></button>
    <div class="volume-bar">
      <input type="range" id="volumeSlider" class="volume-slider" min="0" max="100" step="1" value="100">
    </div>
  </div>
  
  <script>
    var audio = new Audio('/media/piano.mp3');
    var playButton = document.getElementById('playButton');
    var volumeSlider = document.getElementById('volumeSlider');
    var isPlaying = false;
  
    // Retrieve the previous play state and volume from local storage
    var storedIsPlaying = localStorage.getItem('isPlaying');
    var storedVolume = localStorage.getItem('volume');
  
    if (storedIsPlaying === 'true') {
      isPlaying = true;
      playButton.innerHTML = '<i class="fa-solid fa-pause"></i>';
    }
  
    if (storedVolume !== null) {
      volumeSlider.value = storedVolume;
      audio.volume = storedVolume / 100;
    }
  
    playButton.addEventListener('click', function() {
      if (isPlaying) {
        audio.pause();
        playButton.innerHTML = '<i class="fa-solid fa-play"></i>';
      } else {
        audio.play();
        playButton.innerHTML = '<i class="fa-solid fa-pause"></i>';
      }
      isPlaying = !isPlaying;
  
      // Store the play state in local storage
      localStorage.setItem('isPlaying', isPlaying);
    });
  
    volumeSlider.addEventListener('input', function() {
      var volume = volumeSlider.value / 100;
      audio.volume = volume;
  
      // Store the volume in local storage
      localStorage.setItem('volume', volumeSlider.value);
    });
  </script>
  