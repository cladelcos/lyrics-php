<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        $nameTitle = "New Band";
        include '../paths/styles-page.php'; 
    ?>
</head>
<body>
    <?php include "../paths/nav-private-index.php"; ?>
    <div class="page-screen">
        <?php error_reporting(0); ?>
        <?php 
            include "../php-validation/cover.php"; 
        ?>
           
        <div class="body-content left-align max center">
            <h1>Add New Band</h1>
            <form action="../sql/new-table.php" method="GET">
                <p> Name Band: <input type="text" placeholder="avenged_sevenfold" name="band"> </p> 

                <br>
                <input type="submit" value="Enter">
            </form>
        </div>
    </div>
</body>
</html>