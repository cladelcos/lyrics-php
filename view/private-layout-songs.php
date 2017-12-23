<html lang="en">
<head>
     <?php 
        $nameTitle = "Private Layout";
        include '../paths/styles-page.php'; 
    ?>
</head>
<body>
    <div class="page-screen">
        <?php 
            include "../paths/nav-index.php"; 
        ?>
        <div class="body-content left-align max center">
            <?php error_reporting(0); ?>

            <?php 
                
                include "../sql/show-data.php?nameTable=<?=$nameTable;?>";
                include "../php-validation/cover.php";
            ?>

            <br>

            <h1><?=$nameTitle;?></h1>

        </div>
    </div>
</body>
</html>