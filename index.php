<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Cara Membuat Game Flappy Bird</title>
    <link href="style.css" rel="stylesheet" />
</head>

<body>
    <div id="container">

        <div id="bird"></div>

        <div id="pole_1" class="pole"></div>
        <div id="pole_2" class="pole"></div>

    </div>

    <div id="score_div">
        <p><b>Score: </b><span id="score">0</span></p>
        <p><b>Speed: </b><span id="speed">10</span></p>
    </div>

    <button id="restart_btn">Restart</button>

    <script src="jquery.min.js"></script>
    <script src="script.js"></script>

</body>
</html>