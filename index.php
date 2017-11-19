<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="http://portaldoamazonas.com/wp-content/uploads/2016/04/brasil-capa-e1460639102455-256x256.png">
    <meta charset="UTF-8">
    <title>Lyrics</title>
    <link rel="stylesheet" href="css/reset.css">

    <link rel="stylesheet" media="screen and  (min-width: 250px) and (max-width: 500px)" href="css/mobile.css">
    <link rel="stylesheet" media="screen and  (max-width: 650px)" href="css/mobile.css">
    <link rel="stylesheet" media="screen and (min-width: 500px) and (max-width: 1250px)" href="css/config-page.css">
    <link rel="stylesheet" media="screen and  (min-width: 1250px) and (max-width: 2500px)" href="css/config-page.css">

    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" media="screen and  (min-width: 250px) and (max-width: 500px)" href="css/mobile.css">
    <link rel="stylesheet" media="screen and  (max-width: 650px)" href="css/mobile.css">
    <link rel="stylesheet" media="screen and (min-width: 500px) and (max-width: 1250px)" href="css/computer.css">
    <link rel="stylesheet" media="screen and  (min-width: 1250px) and (max-width: 2500px)" href="css/computer.css">

    <link rel="stylesheet" href="css/animation.css">
</head>
<body>
    <script src="js/alteration-layout.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-animate.js"></script>
    <script src="angular/model/app.js"></script>
    <script src="angular/controller/english-controller.js"></script>

    <?php error_reporting(0); ?>

    <div class="page-screen"  ng-app="english">
        <nav>
            <ul>
                <li><a href="#" class="disable">Lyrics</a></li>
            </ul>
        </nav>
           <!-- O header abaixo esta com o css sendo ignorado -->
            <h1 class="bg-headers"> <?php echo "Lyrics To Traine and Learn The English Languange" ?> </h1>

        <div class="body-content left-align max center">


            <?php echo "PHP code in execution" ?>


            <h3>Search: <input type="text"> <button>Search</button></h3>
            <?php include "sql/database.php" ?>

            
        </div>
    </div>
</body>
</html>