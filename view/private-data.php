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
            <?php error_reporting(0); ?>

            <?php 
                $nameTbPass = $_GET['nameTb'];
                include "../sql/show-data.php?tbSqlPass=<?=$nameTbPass?>";
            ?>

            <br>
            
            <button><a href="../sql/show-data.php?tbSqlPass=<?=$nameTbPass?>">Access</a></button>

            <h1><?=$nameTbPass;?></h1>

            <p>Covers will being in here.</p>
        </div>
    </div>
</body>
</html>