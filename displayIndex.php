<?php
    $textP = strtolower($_POST['paragraph']);
    $badWord = strtolower($_POST['badWord']);
    $finalText = str_replace($exploded, '***' , $textP);
    // con questo non censura parole multiple aggiungendo *** per parola 
    $exploded = explode( " " , $badWord);


    
    // ho provato a fare in modo da censurare due parole distinte ma facendo cosi censura anche la parola che contiene la porla inserita 
    // provato con diversi separatori, nulla da fare
    // come ad esempio parola da censurare: amo e io scrivo amore il risultato finale e : ***re sarebbe da aggiungere un funzione per un controllo maggiore 
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
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-8">
                <h4 class="my-3">Parola da censurare: <br></h4>
                <input type="text" readonly value="<?php echo $badWord ?>">
                <h4 class="my-3"> Il tuo testo censurato:</h4>
                <textarea cols="50" rows="10" readonly><?php echo $finalText ?></textarea>
            </div>
        </div>
    </div>


</body>
</html>