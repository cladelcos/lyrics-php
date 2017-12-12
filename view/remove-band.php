<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
        $nameTitle = "Remove Band";
        include '../paths/styles-page.php'; 
    ?>
</head>
<body>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script src="../js/test.js"></script>

	<div class="page-screen">
        <?php include "../paths/nav-private-index.php"; ?>
        <?php error_reporting(0); ?>

        <div class="body-content left-align max center">
            <?php include "../sql/tables.php"; ?>
            <table>
                <thead>
                    <tr>
                        <th>Pages</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        // se o número de resultados for maior que zero, mostra os dados
                        if($total > 0) {
                            // inicia o loop que vai mostrar todos os dados
                            do {
                    ?>
                    <tr>
                        <td>
                            <?= //Name tables List Code all_tables
                                $linha['Tables_in_lyrics'];
                                $bandName = $linha['Tables_in_lyrics'];
                             ?>
                        </td>
                        <td>
                            <a href="../sql/remove-table.php?name=<?=$bandName?>">REMOVE</a>
                        </td>
                    </tr>            
                    <?php
                            // finaliza o loop que vai mostrar os dados
                            }while($linha = mysql_fetch_assoc($dados));
                        // fim do if 
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>