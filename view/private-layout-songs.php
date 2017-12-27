<html lang="en">
<head>
     <?php 
        $nameTitle = $_GET["tbName"];
        include "../php-validation/letters.php";
        
        $nameTitleHd = $nameTitleEdited . " - Lyrics";
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
                include "../sql/show-data.php";
                include "../php-validation/cover.php";
            ?>

            <h1><?=$nameTitleEdited;?></h1>

            <?php
                include "../view/covers-show.php";
            ?>
        </div>
    </div>
</body>
</html>