<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>

<body>
    <h1>Badwords</h1>
    <form action="badwords.php" method="GET">
        <div><label for="badword">Parola da sostituire</label> </div>

        <div><input type="text" name="badword" id="badword" placeholder="Inserisci la parola"></div>
        <hr>
        <div> <label for="text-start">Testo</label> </div>

        <div>
            <textarea name="text-start" id="text-start"" cols=" 30" rows="10"></textarea>
        </div>
        <button>Elabora</button>
    </form>
</body>

</html>