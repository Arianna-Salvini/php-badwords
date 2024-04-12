<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>
    <!-- creare il form per paragrafo e parola da censurare -->
    <div class="form_container">
        <h1> Badword censor</h1>
        <form action="" method="post">
            <div class="text_area">
                <textarea name="paragraph" id="paragraph" cols="50" rows="10" placeholder="Inserisci il tuo testo: "></textarea>
            </div>
            <div class="badword_censor_section">
                <label for="badword">Inserisci la parola da censurare</label>
                <input type="text" name="badword" id="badword">
                <input type="submit" value="Invia">
            </div>
        </form>
    </div>
    
</body>
</html>