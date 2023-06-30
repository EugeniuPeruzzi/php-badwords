<?php
    // need to devide sting to array for better word control
    $textP = strtolower($_POST['paragraph']);
    $badWord = strtolower($_POST['badWord']);

    $finalText = str_replace($badWord, '***' , $textP)
?> 



<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Php badwords</title>
</head>
<body>
    <form action="displayIndex.php" method="POST">
        <h6>Parola censurata: <?php echo $badWord ?></h6>
        <p> Il tuo testo censurato: <?php echo $finalText ?> </p>

    </form>
</body>
</html>