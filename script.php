<?php
//ricevere i dati
$textParagraph =$_POST['paragraph'];
$badword = $_POST['badword'];

var_dump($textParagraph);
var_dump($badword)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>

    <!-- stampare a schermo il paragrafo e la sua lunghezza -->
    <h3>Il tuo testo</h3>
    <p> <?= $textParagraph?> </p>
    <div class="parag_length">
        <?= strlen($textParagraph) ?> 
    </div>

</body>
</html>