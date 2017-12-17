<html lang="en">
<head>
    <?php
        $nameTitle = "Lyrics Around";
    ?>
    <link rel="icon" href="<?= $iconURL ?>">
    <meta charset="UTF-8">
    <title><?= $nameTitle ?></title>
    <style>
        <?php 
            include 'css/reset.css';
            include 'css/general.css';
            include 'css/cover-cd.css';
            include 'css/computer.css';
        ?>
    </style>
</head>
<body>
    <div class="page-screen">
        <nav>
            <ul>
                <li><a href="#">Lyrics</a></li>
            </ul>
        </nav>
        <div class="body-content left-align max center">
            
            <div class="buttons">
                <button><a href="view/private-index.php">Select Database</a></button>
                <button><a href="view/new-band.php">New Database</a></button>
                <button><a href="view/remove-band.php">Remove Database</a></button>
            </div>
            <br>    

        </div>
    </div>
</body>
</html>