<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        $nameTitle = "Add Song";
        include '../paths/styles-page.php'; 
    ?>
</head>
<body>
	<div class="page-screen">
        <?php include "../paths/nav-private-index.php"; ?>
        <div class="body-content left-align max center">
            <?php error_reporting(0); ?>

            <?php 
                include "../sql/show-data.php";
                include "../sql/tables.php";
                include "../php-validation/cover.php"; 
            ?>

            <h1>Add New Song</h1>
            <form action="../sql/add.php" method="GET">
                <p> Page Band: 
                    <select>
                    <?php
                        // se o número de resultados for maior que zero, mostra os dados
                        if($total > 0) {
                            // inicia o loop que vai mostrar todos os dados
                            do {
                    ?>
                    <?php $bandName=$linha['Tables_in_lyrics'];?>
                        <option value="<?=$bandName?>" name="bandName"><?=$bandName?></option>  
                     <?php
                            // finaliza o loop que vai mostrar os dados
                            } while($linha = mysql_fetch_assoc($dados));
                        // fim do if 
                        }
                    ?>
                    <?php
                        // tira o resultado da busca da memória
                        mysql_free_result($dados);
                    ?>
                    </select>
                </p> 
                <p> Band: <input type="text" name="band"> </p> 
                <p> Song Name: <input type="text" name="songName"> </p>
                <p> URL Lyrics: <input type="text" name="urlLyrics"> </p>
                <p> Genre: <input type="text" name="genre"> </p>
                <p> Abbreviation Band Name: <input type="text" name="abbrBandName"> </p>
                <p> Abbreviation Band Album: <input type="text" name="abbrBandAlbum"> </p>

                <br>
                <input type="submit" value="Enter">
            </form>
        </div>
    </div>
</body>
</html>