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
<div class="top">

<div class="topg"><a href="#home" class="Home">Home</a></div>

</div>
    <div class="überklasse">
        <div class="container">
            <div class="items2"><p>Id</p><?php $ausleihe = $result[0]; $ausleiheid = $ausleihe['id']; echo("<p>".$ausleiheid."</p>"); ?></div>
            <div class="items"><p>Name</p><?php   echo("<p>".$ausleihe['name']."</p>"); ?></div>
            <div class="items"><p>Email</p><?php  echo("<p>".$ausleihe['email']."</p>"); ?></div>
            <div class="items"><p>Mitgliedschaft</p><?php  echo("<p>".$ausleihe['mitgliedschaft']."</p>"); ?></div>
            <div class="items"><p>Video</p><?php  echo("<p>".$ausleihe['ausgeleihtesvideo']."</p>"); ?></div>
            <div class="items"><p>Datum</p><?php  echo("<p>".$ausleihe['datum']."</p>"); ?></div>
            <div class="items"><p>Ausleihestatus</p><?php  echo("<p>".$ausleihe['ausleihstatus']."</p>"); ?></div>
            <?php
                echo("<a class='button1' href='zurückgeben?id=$ausleiheid'>Zurückgegeben</a>"."<a class='button1' href='bearbeiten?id=$ausleiheid'>Bearbeiten</a>")
            ?>
            


        </div>
    </div>

</body>

</html>