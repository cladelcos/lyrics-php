<html lang="en">
<head>
     <?php 
        $nameTitleHd = "Data - Songs";
        include '../paths/styles-page.php'; 
    ?>
</head>
<body>
    <div class="page-screen">
        <?php 
            error_reporting(0);
            include "../paths/nav-private-index.php";
        ?>
        <div class="body-content left-align max center">
            <?php 
                $tbNameSql = $_GET['tbName'];
                $nameTitle = $tbNameSql;
                include "../php-validation/letters.php";
                include "../sql/show-data.php";
            ?>

            <h1>Configurations in <?= $nameTitleEdited; ?> - Page</h1>
            <br>
            <table>
                <thead>
                    <th>Band</th>
                    <th>Song Name</th>
                    <th>URL</th>
                    <th>Genre</th>
                    <th>Cover URL</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <form action="../sql/add.php" method="GET">
                        <input type="hidden" name="tbName" value="<?=$tbNameSql?>">
                        <tr>
                            <td><input type="text" name="bandNameForm"></td>
                            <td><input type="text" name="songNameForm"></td>
                            <td><input type="text" name="urlLyricsForm"></td>
                            <td><input type="text" name="genreBandForm"></td>
                            <td>
                                <select name="coverForm">
                                    <?php
                                        // $dir = glob("../data/image/cover-front/*.png*");
                                        $dir = new DirectoryIterator('../data/image/cover-front/.');
                                        foreach ($dir as $item) {
                                            if ($item->isFile()) {
                                                $fileName = $item->getFilename();

                                                $longFileName = str_replace(array('-','_'),' ', $fileName);

                                                $longFileName = preg_replace('/(\d+)/', '$1', $fileName);

                                                $config[] = array('short' => $filename,
                                                                  'long'  => $longFileName);
                                    ?>
                                        <option value="<?= $fileName ?>"><?= $fileName ?></option>
                                    <?php
                                        
                                            }
                                        }
                                    ?>
                                </select>
                            </td>
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
                            <?=$linha['cover_url'];?>
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
        </div>
    </div>
</body>
</html>