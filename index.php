<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="http://portaldoamazonas.com/wp-content/uploads/2016/04/brasil-capa-e1460639102455-256x256.png">
    <meta charset="UTF-8">
    <title>Lyrics</title>
    <link rel="stylesheet" href="css/reset.css">
<<<<<<< HEAD
    <link rel="stylesheet" media="screen and  (min-width: 250px) and (max-width: 500px)" href="css/mobile.css">
    <link rel="stylesheet" media="screen and  (max-width: 650px)" href="css/mobile.css">
    <link rel="stylesheet" media="screen and (min-width: 500px) and (max-width: 1250px)" href="css/config-page.css">
    <link rel="stylesheet" media="screen and  (min-width: 1250px) and (max-width: 2500px)" href="css/config-page.css">
=======
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" media="screen and  (min-width: 250px) and (max-width: 500px)" href="css/mobile.css">
    <link rel="stylesheet" media="screen and  (max-width: 650px)" href="css/mobile.css">
    <link rel="stylesheet" media="screen and (min-width: 500px) and (max-width: 1250px)" href="css/computer.css">
    <link rel="stylesheet" media="screen and  (min-width: 1250px) and (max-width: 2500px)" href="css/computer.css">
>>>>>>> a1cef4ef0ca5c12a554fb36b803ed2848d866b6b
    <link rel="stylesheet" href="css/animation.css">
</head>
<body>
    <script src="js/alteration-layout.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-animate.js"></script>
    <script src="angular/model/app.js"></script>
    <script src="angular/controller/english-controller.js"></script>

    <div class="page-screen"  ng-app="english">
        <nav>
            <ul>
                <li><a href="#" class="disable">Lyrics</a></li>
            </ul>
        </nav>
        <div class="body-content left-align max center">
<<<<<<< HEAD
            <h1>Lyrics To Traine and Learn The English Languange</h1>
            <?php echo "Website With PHP"; ?>
            <?php include "sql/database.php" ?>
=======
            <h1 class="bg-headers">Lyrics To Traine and Learn The English Languange</h1>

            <?php include "sql/database.php" ?>
            <?php echo "PHP code in execution" ?>
>>>>>>> a1cef4ef0ca5c12a554fb36b803ed2848d866b6b

            <?php
                // se o número de resultados for maior que zero, mostra os dados
                if($total > 0) {
                    // inicia o loop que vai mostrar todos os dados
                    do {
            ?>
                        <p><?=$linha['nome']?> / <?=$linha['telefone']?></p>
            <?php
                    // finaliza o loop que vai mostrar os dados
                    }while($linha = mysql_fetch_assoc($dados));
                // fim do if 
                }
            ?>
<<<<<<< HEAD
            <h3>Search: <input type="text"> <button>Search</button></h3>

            <?php
            // tira o resultado da busca da memória
            mysql_free_result($dados);
            ?>
=======


            <h1>others results</h1>

            <?php
                // tira o resultado da busca da memória
                mysql_free_result($dados);
            ?>
                
>>>>>>> a1cef4ef0ca5c12a554fb36b803ed2848d866b6b
        </div>
    </div>
</body>
</html>