<html lang="en">
<head>
     <?php 
        $nameTitle = "Data - Songs";
        include '../paths/styles-page.php'; 
    ?>
</head>
<body>
    <div class="page-screen">
        <?php 
            include "../paths/nav-private-index.php"; 
        ?>
        <div class="body-content left-align max center">
            <?php 
                error_reporting(0); 
                $tbNamePass = $GET['tbName'];

                include "../sql/show-data.php";
            ?>
            <br>
            <table>
                <thead>
                    <th>Band</th>
                    <th>Song Name</th>
                    <th>URL</th>
                    <th>Genre</th>
                    <th>Cover Name Band Abbreviation</th>
                    <th>Cover Name Album Abbreviation</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <form action="../sql/add.php">
                        <input type="hidden" name="tbName" value="<?=$tbNameSql?>">
                        <tr>
                            <td><input type="text" name="bandNameForm"></td>
                            <td><input type="text" name="songNameForm"></td>
                            <td><input type="text" name="urlLyricsForm"></td>
                            <td><input type="text" name="genreBandForm"></td>
                            <td><input type="text" name="coverANBForm"></td>
                            <td><input type="text" name="coverANAForm"></td>
                            <td><input type="submit" value="Add"></td>
                        </tr>
                    </form>
                    <?php
                        // se o número de resultados for maior que zero, mostra os dados
                        if($total > 0) {
                            // inicia o loop que vai mostrar todos os dados
                            do {
                    ?>
                    <tr>
                        <td>
                            <?=$linha['band'];?> 
                        </td>
                        <td>
                            <?=$linha['song_name'];?> 
                        </td>
                        <td>
                            <?=$linha['url_lyrics'];?> 
                        </td>
                        <td>
                            <?=$linha['genre'];?>
                        </td>
                        <td>
                            <?=$linha['cover_abbr_name_band'];?>
                        </td>
                        <td>
                            <?=$linha['cover_abbr_name_album'];?> 
                        </td>
                        <td><a href="../sql/remove.php?id=<?=$linha['id_band']?>&tbName=<?=$tbNameSql?>">Remove</a></td>
                    </tr>
                    <?php
                            // finaliza o loop que vai mostrar os dados
                            } while($linha = mysql_fetch_assoc($dados));
                        // fim do if 
                        }
                        mysql_free_result($dados);
                    ?>
                </tbody>
            </table>

            <p>Covers will being in here.</p>
        </div>
    </div>
</body>
</html>