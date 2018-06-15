<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, shrink-to-fit=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/w3pro.css">
    <link rel="stylesheet" href="css/w3-theme-indigo.css">
    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
<script src="js/jquery-3.3.1.min.js"></script>
    <script src="tvseriesreviews/reviewClass.js"></script>
    <script src="tvseriesreviews/reviews.js"></script>

    <script src="js/main.js">
    </script>
</head>
<body>

<div class="w3-bar w3-theme-d5">
    <a href="/home"><button class="w3-bar-item w3-button" id="home">Home</button></a>
    <a href="/music"><button class="w3-bar-item w3-button w3-hide-small" id="music" >Music</button></a>
    <a href=""><button class="w3-bar-item w3-button w3-hide-small" id="tvSeries" >Tv Series</button></a>
   <a href="/pukkastudios"> <button class="w3-bar-item w3-button w3-hide-small" id="pukkaStudios" >Pukka Studios</button></a>
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="navToggle()">&#9776;</a>
</div>

<div id="nav" class="w3-bar-block w3-hide w3-hide-large w3-hide-medium w3-theme-d5">
   <a href="/home"><button class="w3-bar-item w3-button" id="home">Home</button></a>
    <a href="/music"> <button class="w3-bar-item w3-button" id="music" >Music</button></a>
    <a href=""> <button class="w3-bar-item w3-button" id="tvSeries" >Tv Series</button></a>
    <a href="/pukkastudios"> <button class="w3-bar-item w3-button" id="pukkaStudios" >Pukka Studios</button></a>
</div>


<div class="w3-sidebar w3-bar-block w3-theme-l4 w3-card" style="width:130px">
    <h3 class="w3-bar-item">Tv Shows</h3>
    <button class="w3-bar-item w3-button tablink" id="break">Breaking Bad</button>
    <button class="w3-bar-item w3-button tablink" id="empire">Empire</button>
    <button class="w3-bar-item w3-button tablink" id="robot">Mr Robot</button>
    <button class="w3-bar-item w3-button tablink" id="narcos">Narcos</button>
    <button class="w3-bar-item w3-button tablink" id="ozark">Ozark</button>
    <button class="w3-bar-item w3-button tablink" id="power">Power</button>
    <button class="w3-bar-item w3-button tablink" id="rick">Rick And Morty</button>
    <button class="w3-bar-item w3-button tablink" id="orange">Orange Is The New Black</button>
</div>

<div style="margin-left:130px" id="reviewCard" class="w3-card-4 w3-theme-l4 w3-center">
    <header class="w3-container w3-theme">
        <h1 id="name"></h1>
    </header>
    <div id="imageInsert" class="w3-container">

    </div>
    <h3>Genre:</h3>

    <em id="genre"></em>
    <hr>
    <div class="w3-container">
        <h3>IMdb Rating:</h3>
        <em id="imdbRating"></em>
        <hr>
        <h3>Pukks Rating:</h3>
        <em id="pukksRating"></em>

    </div>

    <hr>
    <div class="w3-container">
        <div class="w3-container">
            <h3>
                IMdb
            </h3>
        </div>
        <p id="imdbReview">

        </p>

    </div>
    <hr>
    <div class="w3-container">
        <div class="w3-container">
            <h3>
                Pukkas Thoughts
            </h3>
        </div>
        <p id="pukkasThoughts"></p>
    </div>
    <hr>
</div>
<footer style="margin-left:130px" class="w3-container w3-center w3-theme">

Powered by <a href="www.pukks.net/pukkastudios"> Pukka Studios</a> 2018
</footer>
<script src="js/vendor/modernizr-3.6.0.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'pukks.net', 'auto'); ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>
</html>