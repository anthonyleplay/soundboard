<?php
session_start();
require_once "controler\index-ctrl.php";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets\css\style.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="icon" href="assets\img\logo-128.png">
    <title>soundboard</title>
</head>


<body>
    <!-- navbar -->
    <?php
    include_once 'include\part-navbar.php';
    ?>
    <!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-green">
        <div class="navbar-collapse collapse w-100 dual-collapse2 order-1 order-md-0">
            <ul class="navbar-nav ml-auto text-center">
                <li class="nav-item active">
                    <a class="nav-link bg-yellow" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link bg-yellow" href="#">Link</a>
                </li>
            </ul>
        </div>
        <div class="mx-auto my-2 order-0 order-md-1 position-relative">
            <a class="mx-auto" href="#">
                <img id="logo" src="assets/img/logo1.jpg" class="rounded-circle">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse w-100 dual-collapse2 order-2 order-md-2">
            <ul class="navbar-nav mr-auto text-center">
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- section-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-6">
                    <audio preload="auto" id="sound1">
                        <source src="https://raw.githubusercontent.com/cartz/various/master/soundboard/audio/punch.ogg" type="audio/ogg">
                        <source src="https://raw.githubusercontent.com/cartz/various/master/soundboard/audio/punch.mp3" type="audio/mpeg">
                    </audio>
                    <button type="button" class="btn btn-lg btn-block" onclick="document.getElementById('sound1').play()">TEST</button>
                </div>
                <div class="col-md-4 col-xs-6">
                    <audio preload="auto" id="sound2">
                        <source src="https://raw.githubusercontent.com/cartz/various/master/soundboard/audio/punch.ogg" type="audio/ogg">
                        <source src="https://raw.githubusercontent.com/cartz/various/master/soundboard/audio/punch.mp3" type="audio/mpeg">
                    </audio>
                    <button type="button" class="btn btn-lg btn-block" onclick="document.getElementById('sound2').play()">TEST</button>
                </div>
                <div class="col-md-4 col-xs-6">
                    <audio preload="auto" id="sound3">
                        <source src="https://raw.githubusercontent.com/cartz/various/master/soundboard/audio/punch.ogg" type="audio/ogg">
                        <source src="https://raw.githubusercontent.com/cartz/various/master/soundboard/audio/punch.mp3" type="audio/mpeg">
                    </audio>
                    <button type="button" class="btn btn-lg btn-block" onclick="document.getElementById('sound3').play()">TEST</button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-xs-6">
                    <audio preload="auto" id="sound1">
                        <source src="https://raw.githubusercontent.com/cartz/various/master/soundboard/audio/punch.ogg" type="audio/ogg">
                        <source src="https://raw.githubusercontent.com/cartz/various/master/soundboard/audio/punch.mp3" type="audio/mpeg">
                    </audio>
                    <button type="button" class="btn btn-lg btn-block" onclick="document.getElementById('sound1').play()">TEST</button>
                </div>
                <div class="col-md-4 col-xs-6">
                    <audio preload="auto" id="sound2">
                        <source src="https://raw.githubusercontent.com/cartz/various/master/soundboard/audio/punch.ogg" type="audio/ogg">
                        <source src="https://raw.githubusercontent.com/cartz/various/master/soundboard/audio/punch.mp3" type="audio/mpeg">
                    </audio>
                    <button type="button" class="btn btn-lg btn-block" onclick="document.getElementById('sound2').play()">TEST</button>
                </div>
                <div class="col-md-4 col-xs-6">
                    <audio preload="auto" id="sound3">
                        <source src="https://raw.githubusercontent.com/cartz/various/master/soundboard/audio/punch.ogg" type="audio/ogg">
                        <source src="https://raw.githubusercontent.com/cartz/various/master/soundboard/audio/punch.mp3" type="audio/mpeg">
                    </audio>
                    <button type="button" class="btn btn-lg btn-block" onclick="document.getElementById('sound3').play()">TEST</button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-xs-6">
                    <audio preload="auto" id="sound1">
                        <source src="https://raw.githubusercontent.com/cartz/various/master/soundboard/audio/punch.ogg" type="audio/ogg">
                        <source src="https://raw.githubusercontent.com/cartz/various/master/soundboard/audio/punch.mp3" type="audio/mpeg">
                    </audio>
                    <button type="button" class="btn btn-lg btn-block" onclick="document.getElementById('sound1').play()">TEST</button>
                </div>
                <div class="col-md-4 col-xs-6">
                    <audio preload="auto" id="sound2">
                        <source src="https://raw.githubusercontent.com/cartz/various/master/soundboard/audio/punch.ogg" type="audio/ogg">
                        <source src="https://raw.githubusercontent.com/cartz/various/master/soundboard/audio/punch.mp3" type="audio/mpeg">
                    </audio>
                    <button type="button" class="btn btn-lg btn-block" onclick="document.getElementById('sound2').play()">TEST</button>
                </div>
                <div class="col-md-4 col-xs-6">
                    <audio preload="auto" id="sound3">
                        <source src="https://raw.githubusercontent.com/cartz/various/master/soundboard/audio/punch.ogg" type="audio/ogg">
                        <source src="https://raw.githubusercontent.com/cartz/various/master/soundboard/audio/punch.mp3" type="audio/mpeg">
                    </audio>
                    <button type="button" class="btn btn-lg btn-block" onclick="document.getElementById('sound3').play()">TEST</button>
                </div>
            </div>
        </div>
    </section>

                </div>
                <div class="col-3">

                </div>
                <div class="col-3">

                </div>
                <div class="col-3">

                </div>
                <div class="col-3">

                </div>
                <div class="col-3">

                </div>
            </div>
        </div>
    </main>

    <!-- footer -->
    <?php
    include_once 'include\part-footer.php';
    ?>

    <!-- JS bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
    <!-- mon JS -->
    <script src="assets\js\script.js"></script>
</body>

</html>