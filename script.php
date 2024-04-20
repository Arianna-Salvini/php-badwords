<?php
//ricevere i dati
$textParagraph = $_POST['paragraph'];
$badword = $_POST['badword'];

// var_dump($textParagraph);
// var_dump($badword);

$textCensored = str_replace($badword, '***', $textParagraph);


echo '<pre>';

// var_dump($textCensored);

echo '</pre>';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>

    <link rel="stylesheet" href="./assets/style.css">
</head>

<body class="body_script">
    <div class="container">
        <h2>Il tuo testo</h2>
        <!-- Stampare il testo censurato -->
        <!-- <p> <?= $textParagraph ?> </p> -->
        <p class="parag_censored"> <?= $textCensored ?> </p>

        <!-- stampare a schermo il paragrafo e la sua lunghezza -->
        <div class="parag_length">
            Text length: <?= strlen($textParagraph) ?>
        </div>

        <!-- Add button to go back to index page -->
        <button>
            <a href="./index.php">Back</a>
        </button>
    </div>

</body>

</html>