<html lang="en">
<head>
     <?php 
        $nameTitle = "Layout Songs Owner View";
        include '../paths/styles-page.php'; 
    ?>
</head>
<body>
    <div class="page-screen">
        <?php 
            include "../paths/nav-private-index.php"; 
        ?>
        <div class="body-content left-align max center">
            <?php error_reporting(0); ?>

            <?php 
                $nameTbPass = $_GET['nameTb'];
                include "../sql/show-data.php?tbSqlPass=<?=$nameTbPass?>";
            ?>

            <br>
            
            <button><a href="../sql/show-data.php?tbSqlPass=<?=$nameTbPass?>">Access</a></button>

            <h1><?=$nameTbPass;?></h1>

            <table>
                <thead>
                    <th>Band</th>
                    <th>Song Name</th>
                    <th>URL Lyrics</th>
                    <th>Genre</th>
                    <th>Cover Band</th>
                    <th>Cover Album</th>
                    <th colspan="3">Actions</th>
                </thead>
                <tbody>
                    <form action="../sql/add.php?tbSqlPass=<?=$nameTbPass?>" method="GET">
                        <tr>
                            <td><input type="text" name="bandNameForm"></td>
                            <td><input type="text" name="songNameForm"></td>
                            <td><input type="text" name="urlLyricsForm"></td>
                            <td><input type="text" name="genreForm"></td>
                            <td><input type="text" name="coverNameBandForm"></td>
                            <td><input type="text" name="coverNameAlbumForm"></td>
                            <td colspan="3"><input type="submit" value="Add"></td>
                        </tr>
                    </form>
                    <?php
                        // se o número de resultados for maior que zero, mostra os dados
                        if($total > 0) {
                            // inicia o loop que vai mostrar todos os dados
                            do {
                    ?>
                    <tr>
                        <td><?=$linha['band']?></td>
                        <td><?=$linha['song_name']?></td>
                        <td><?=$linha['url_lyrics']?></td>
                        <td><?=$linha['genre']?></td>
                        <td><?=$linha['cover_abbr_name_band']?></td>
                        <td><?=$linha['cover_abbr_name_album']?></td>
                        
                        <td><a href="../sql/remove.php?id=<?=$linha['id']?>">Remove</a></td>
                        <!-- <td><a href="#" disable>Alter</a></td> -->
                    </tr>
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
                </tbody>
            </table>
            <div class="buttons">
                <button><a href="../"></a></button>
            </div>
        </div>
    </div>
</body>
</html>