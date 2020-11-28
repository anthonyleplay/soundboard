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

    <main>
        <div class="container">
            <div class="row">
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