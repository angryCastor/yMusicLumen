<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="user-scalable=no">
    <title>Daily Playlist</title>
    <link rel="stylesheet" href="/styles.css">
</head>
<body>
<!-- Top Info -->
<div id="title">
    <span id="track"></span>
    <div id="timer">0:00</div>
    <div id="duration">0:00</div>
</div>

<!-- Controls -->
<div class="controlsOuter">
    <div class="controlsInner">
        <div id="loading"></div>
        <div class="btn" id="playBtn"></div>
        <div class="btn" id="pauseBtn"></div>
        <div class="btn" id="prevBtn"></div>
        <div class="btn" id="nextBtn"></div>
    </div>
    <div class="btn" id="playlistBtn"></div>
    <div class="btn" id="volumeBtn"></div>
</div>

<!-- Progress -->
<div id="waveform"></div>
<div id="bar"></div>
<div id="progress"></div>

<!-- Playlist -->
<div id="playlist">
    <div class="hide-button">
        <div id="btnCancel" class="btn-hide-wrapper">
            <img src="/cancel.svg" alt="">
        </div>
        <div id="btnRandom" class="btn-hide-wrapper">
            <img src="/random.svg" alt="">
        </div>
    </div>
    <div id="list"></div>
</div>

<!-- Volume -->
<div id="volume" class="fadeout">
    <div id="barFull" class="bar"></div>
    <div id="barEmpty" class="bar"></div>
    <div id="sliderBtn"></div>
</div>

<!-- Scripts -->
<script src="/howler.core.min.js"></script>
<script src="/siriwave.js"></script>
<script src="/player.js"></script>
</body>
</html>