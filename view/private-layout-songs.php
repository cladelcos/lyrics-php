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
                $nameTitleTable = $_GET['name'];
                include "../php-validation/cover.php";
                include "../sql/show-data.php?name=<?=$nameTitleTable?>";
            ?>

            <br>

            <h1><?=$nameTitleTable;?></h1>

            <?php
                // se o número de resultados for maior que zero, mostra os dados
                if($total > 0) {
                    // inicia o loop que vai mostrar todos os dados
                    do {
                        include "../paths/cover-cd.php";
                    // finaliza o loop que vai mostrar os dados
                    }while($linha = mysql_fetch_assoc($dados));
                // fim do if 
                }
            ?>

            <?php
                // tira o resultado da busca da memória
                mysql_free_result($dados);
            ?>
        </div>
    </div>
</body>
</html>