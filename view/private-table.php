<html lang="en">
<head>
     <?php 
        $nameTitle = "Tables - Pages";
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
                include "../sql/tables.php";
            ?>

            <h1><?=$nameTbPass;?></h1>

            <table>
                    <thead>
                        <th>Bands</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <form action="../sql/new-table.php">
                            <tr>
                                <td>
                                    <input type="text" name="band">
                                </td>
                                <td><input type="submit" value="Add"></td>
                            </tr> 
                        </form>
                        <?php
                            // se o número de resultados for maior que zero, mostra os dados
                            if($total > 0) {
                                // inicia o loop que vai mostrar todos os dados
                                do {
                                    $nameTable = $linha['Tables_in_id3984030_lyrics'];
                        ?>
                        <tr>
                            <td>
                                <?= //Name tables List Code all_tables
                                    $linha['Tables_in_id3984030_lyrics'];
                                ?>
                            </td>
                            <td>
                                <a href="../sql/drop-page.php?nameTb=<?= $nametable ?>">Remove</a>
                            </td>
                        </tr>            
                        <?php
                                // finaliza o loop que vai mostrar os dados
                                } while($linha = mysql_fetch_assoc($dados));
                            // fim do if 
                            }
                        ?>
                    </tbody>
                </table>
        </div>
    </div>
</body>
</html>