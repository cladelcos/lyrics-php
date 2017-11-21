<html lang="en">
<head>
    <?php 
        echo '<link rel="icon" href="http://portaldoamazonas.com/wp-content/uploads/2016/04/brasil-capa-e1460639102455-256x256.png">';
        echo '<meta charset="UTF-8">';
        echo '<title>Lyrics</title>';
        echo '<link rel="stylesheet" href="css/reset.css">';
        echo '<link rel="stylesheet" href="css/computer.css">';
        echo '<link rel="stylesheet" href="css/mobile.css">';
        echo '<link rel="stylesheet" href="css/general.css">';
    ?>
</head>
<body>
    <div class="page-screen"  ng-app="english">
        <nav>
            <ul>
                <li><a href="#" class="disable">Lyrics</a></li>
            </ul>
        </nav>
        <div class="body-content left-align max center">
            <!-- O header abaixo esta com o css sendo ignorado -->
            <h1 class="bg-header"> Lyrics To Traine and Learn The English Languange </h1>
            <?php error_reporting(0); ?>

            <?php include "sql/database.php"; ?>
            
            <br>

            <?php
                // se o número de resultados for maior que zero, mostra os dados
                if($total > 0) {
                    // inicia o loop que vai mostrar todos os dados
                    do {
            ?>
            <div class="left-screen hide">
                <h4>Filter: <input type="text" ng-model="filterBand"/></h4>
                <form>
                    <h4>Genre Musical</h4>
                    <ul>
                        <li><input type="radio" ng-model="filterBand" value="metal"> Metal</li>
                        <li><input type="radio" ng-model="filterBand" value="rock"> Rock</li>
                        <li><input type="radio" ng-model="filterBand" value="hipHop"> Hip Hop</li>
                    </ul>
                </form>
            </div>
            <div class="hide-unhide position-hide">
                <a onclick="alter()"><img src="https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-ios7-arrow-right-128.png" alt="right-arrow"></a>
            </div>


            <p><?= $linha['band']?> || <?= $linha['songName']?> ||  <?= $linha['genre']?> ||  <?= $linha['cover']?></p>
            

            <div class="body-content left-align max center">
                <h1>Lyrics To Traine and Learn The English Languange</h1>

                <div ng-controller="generalCtrl">
                    <div ng-repeat="x in lyric | filter: filterBand" >
                        <div class="content-field" name="<?=$linha['genre'] ?>">
                            <a href="<?=$linha['urlLyrics'] ?>" target="_blank">
                                <h6>
                                    <div class="wrapper">
                                        <div class="cube zoom-in">
                                            <i class="front">
                                                <img src="data/image/cover-front/<?=$linha['cover'] ?>" alt="<?=$linha['band'] ?> - <?=$linha['songName'] ?>">
                                            </i>
                                            <i class="back">
                                                <img src="data/image/cover-back/<?=$linha['cover'] ?>" alt="<?=$linha['band'] ?> - <?=$linha['songName'] ?>">
                                            </i>
                                            <i class="top">
                                            </i>
                                            <i class="bottom">
                                            </i>
                                            <i class="left">
                                               <img src="data/image/cover-side/<?=$linha['cover'] ?>" alt="<?=$linha['band'] ?> - <?=$linha['songName'] ?>">
                                            </i>
                                            <i class="right">
                                                <img src="data/image/cover-side/<?=$linha['cover'] ?>" alt="<?=$linha['band'] ?> - <?=$linha['songName'] ?>">
                                            </i>
                                        </div>
                                    </div>
                                    <div>
                                        <?=$linha['band'] ?> - <?=$linha['songName'] ?>
                                    </div>
                                </h6>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <?php
                    // finaliza o loop que vai mostrar os dados
                    }while($linha = mysql_fetch_assoc($dados));
                // fim do if 
                }
            ?>
            <h1 class="bg-header">others results</h1>

            <?php
                // tira o resultado da busca da memória
                mysql_free_result($dados);
            ?>

        </div>
    </div>
</body>
</html>