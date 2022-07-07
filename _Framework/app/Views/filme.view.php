<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style2.css">
    <title>Film</title>
</head>

<body>
    <div class="überklasse">
        <div class="container">
            <div class="items2"><p>Id</p><?php $ausleihe = $result[0]; echo("<p>".$ausleihe['id']."</p>"); ?></div>
            <div class="items"><p>Name</p><?php $ausleihe = $result[0]; echo("<p>".$ausleihe['name']."</p>"); ?></div>
            <div class="items"><p>Email</p><?php $ausleihe = $result[0]; echo("<p>".$ausleihe['email']."</p>"); ?></div>
            <div class="items"><p>Mitgliedschaft</p><?php $ausleihe = $result[0]; echo("<p>".$ausleihe['mitgliedschaft']."</p>"); ?></div>
            <div class="items"><p>Video</p><?php $ausleihe = $result[0]; echo("<p>".$ausleihe['ausgeleihtesvideo']."</p>"); ?></div>
            <div class="items"><p>Datum</p><?php $ausleihe = $result[0]; echo("<p>".$ausleihe['datum']."</p>"); ?></div>
            <div class="items"><p>Ausleihestatus</p><?php $ausleihe = $result[0]; echo("<p>".$ausleihe['ausleihstatus']."</p>"); ?></div>
            <button class="button1">Bearbeiten</button>
            <button class="button1">Zurückgegeben</button>


        </div>
    </div>

</body>

</html>