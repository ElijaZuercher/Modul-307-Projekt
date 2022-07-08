<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/app.css">
    <title>Home</title>
</head>
<body>
    <div class="top">

        <div class="topg"><a href="home" class="Home">Home</a></div>

    </div>

    <div class="container">
        <div class="andere">
            <div class="Textüberschrifft">
                <div class="textitem1" >Id</div>
                <div class="textitem2">Kunde</div>
                <div class="textitem3">Status</div>
                <div class="textitem4">Film</div>
            </div>
            <div class="ausgabesql">
                <?php 
                        foreach ($result as $ausleihe){
                            $ausleiheid = $ausleihe['id'];
                            $tage = 30;
                            $imgpfad = "glucklich.png";
                            switch ($ausleihe['mitgliedschaft']) {
                                case "Bronze":
                                    $tage = 40;
                                    break;
                                case "Silver":
                                    $tage = 50;
                                    break;
                                case "Gold":
                                    $tage = 70;
                                    break;
                            }
                            if(date('Y-m-d', strtotime($ausleihe['datum'].' + '.$tage.' days')) < date('Y-m-d')){
                                $imgpfad = "angry.png";
                            }
                            echo("<div class='space'>"."<a class='pid' href='filme?id=$ausleiheid'>".$ausleiheid."</a><p class='pname'>".$ausleihe['name']."</p><img src='public/".$imgpfad."' class='pstatus'>"."<p class='pfilm'>".$ausleihe['ausgeleihtesvideo']."</p></div>");
                        }
                ?>
            </div>

        </div>
        <div class="Erfassen">
            <div class="Ausleihe-übercontainer">
                <div class="Ausleihe-Text">Ausleihen erfassen</div>
            </div>
    
            <div class="Ausleihe-Box2">
                <form action="http://localhost/Projekt/_Framework/erfassen" method="POST">
                
                        <div class="rechts"><input name="name" type="text" class="inputfield" placeholder="Name" required></div>
                        <div class="rechts"><input name="email" type="email" class="inputfield" placeholder="E-Mail" required></div>
                        <div class="rechts"><input name="telefon" type="text" class="inputfield" placeholder="Telefon" ></div>
                        <div class="mehrerauswahlen"><select name="film">
                          <?php 
                            foreach($result2 as $filmeaD) {
                                $bol = true;
                                foreach ($result as $ausleihe) {
                                    if ($filmeaD['title'] == $ausleihe['ausgeleihtesvideo']) {
                                        $bol = false;
                                    } 
                                }
                                if($bol){
                                    $filmname = $filmeaD['title'];
                                    echo("<option value='$filmname'>$filmname</option>");
                                }
                                
                            }
                          ?>
                          </select></div>
                            <div class="mehrerauswahlen"><select name="mitgliedschaft">
                            <option value="keine">Kundenmitgliedschaft</option>
                            <option value="Gold">Gold</option>
                            <option value="Silver">Silver</option>
                            <option value="Bronze">Bronze</option>
                          </select></div>
                        
                          <div class="rechts"><input type="submit" class="submitbutton" placeholder="Senden"></div>
                

                </form>

            </div>
        </div>


    </div>    
</body>
</html>