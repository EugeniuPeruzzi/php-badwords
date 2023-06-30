<?php
    $word = 'Inserisci la parola da censurare'
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
        <div class="row d-flex justify-content-center">
            <div class="col-6">
                <h1 class="text-center mb-5">Badword generator</h1>
                <form action="displayIndex.php" method="POST" class="d-flex flex-column ">
                    <h3> <?php echo $word ?></h3>
                    <input type="text" name="badWord" class="mb-5">
                    <h5>Inserisci il testo contenente la parola da censurare</h5>
                    <textarea name="paragraph" cols="50" rows="10" class="mb-4"></textarea>
                    <button class="btn btn-primary w-25 position-relative top-50 start-50 translate-middle mt-4">Send</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>