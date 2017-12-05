<html lang="en">
<head>
    <?php 
        echo '<link rel="icon" href="http://portaldoamazonas.com/wp-content/uploads/2016/04/brasil-capa-e1460639102455-256x256.png">';
        echo '<meta charset="UTF-8">';
        echo '<title>Lyrics</title>';
    ?>
    <style>
        <?php include 'css/reset.css';
              include 'css/computer.css';
              include 'css/mobile.css';
              include 'css/general.css';
        ?>
    </style>
</head>
<body>
    <div class="page-screen"  ng-app="english">
        <nav>
            <ul>
                <li><a href="#" class="disable">Lyrics</a></li>
            </ul>
        </nav>
        <div class="body-content left-align max center">
            <?php error_reporting(0); ?>

            <?php include "sql/database.php"; ?>
            <?php include "php-validation/cover.php"; ?>

            <br>

            <p><?= $linha['band']?> || <?= $linha['songName']?> || <?= $linha['album']?> ||  <?= $linha['genre']?> || <?= cover($linha['coverAbbrNameBand'] , $linha['coverAbbrNameAlbum'])?></p>

            

            <div class="body-content left-align max center">
                <h1>Lyrics To Traine and Learn The English Languange</h1>

                <?php
                    // se o número de resultados for maior que zero, mostra os dados
                    if($total > 0) {
                        // inicia o loop que vai mostrar todos os dados
                        do {
                ?>
                <div>
                    <div>
                        <div class="content-field" name="<?=$linha['genre'] ?>">
                            <a href="<?=$linha['urlLyrics'] ?>" target="_blank">
                                <h6>
                                    <div class="wrapper">
                                        <div class="cube zoom-in">
                                            <i class="front">
                                                <img src="data/image/cover-front/<?= cover($linha['coverAbbrNameBand'], $linha['coverAbbrNameAlbum'])?>" alt="<?=$linha['band'] ?> - <?=$linha['songName'] ?>">
                                            </i>
                                            <i class="back">
                                                <img src="data/image/cover-back/<?= cover($linha['coverAbbrNameBand'], $linha['coverAbbrNameAlbum'])?>" alt="<?=$linha['band'] ?> - <?=$linha['songName'] ?>">
                                            </i>
                                            <i class="top">
                                            </i>
                                            <i class="bottom">
                                            </i>
                                            <i class="left">
                                               <img src="data/image/cover-side/<?= cover($linha['coverAbbrNameBand'], $linha['coverAbbrNameAlbum'])?>" alt="<?=$linha['band'] ?> - <?=$linha['songName'] ?>">
                                            </i>
                                            <i class="right">
                                                <img src="data/image/cover-side/<?= cover($linha['coverAbbrNameBand'], $linha['coverAbbrNameAlbum'])?>" alt="<?=$linha['band'] ?> - <?=$linha['songName'] ?>">
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
                <?php
                        // finaliza o loop que vai mostrar os dados
                        }while($linha = mysql_fetch_assoc($dados));
                    // fim do if 
                    }
                ?>

                <?php
                    // tira o resultado da busca da memória
                    mysql_free_result($dados);
                ?>
                <div class="buttons">
                    <button><a href="view/add.php">Add</a></button>
                    <button><a href="view/remove.php">Remove</a></button>
                </div>
            </div>


        </div>
    </div>
</body>
</html>