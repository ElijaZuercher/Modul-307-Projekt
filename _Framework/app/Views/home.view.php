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

        <div class="topg"><a href="#home" class="Home">Home</a></div>
        <div class="topg"><a href="#filme" class="Filme">Filme</a></div>
        <div class="topg"><a href="#Kunden" class="Kunden">Kunden</a></div>

    </div>

    <div class="AusleiheundErfassen">
        <div class="Ausleihe">
            <div class="Ausleihe-übercontainer">
                <div class="Ausleihe-Text">Ausleihen</div>
            </div>
    
            <div class="Ausleihe-Box">
                <div class="Box-id">Id
                    <?php 
                        foreach ($result as $ausleihe){
        	                echo($ausleihe['id']);
                        }
                    ?>
                </div>
                <div class="Box-film">Film</div>
                <div class="Box-kunde">Kunde</div>
                <div class="Ausleihe-Status">Status</div>
                
            </div>
            
            
            
        </div>
        <div class="Erfassen">
            <div class="Ausleihe-übercontainer">
                <div class="Ausleihe-Text">Ausleihen erfassen</div>
            </div>
            
            <div class="Ausleihe-Box2">
                <form action="http://localhost/Projekt/_Framework/erfassen" method="POST">
                
                    <div class="rechts"><input type="text" name="name" class="inputfield" placeholder="Name" required></div>
                    <div class="rechts"><input type="email" name="email" class="inputfield" placeholder="E-Mail" required></div>
                    <div class="rechts"><input type="text" name="telefon" class="inputfield" placeholder="Telefon" required></div>
                    <div class="rechts"><input type="text" name="film" class="inputfield" placeholder="Ausgeleihtes Video"></div>
                    <div class="mehrerauswahlen"><select name="mitgliedschaft">
                            <option value="Gold">Gold</option>
                            <option value="Silver">Silver</option>
                            <option value="Bronze">Bronze</option>
                            <option value="keine">keine</option>
                        </select></div>
                        
                          <div class="rechts"><input type="submit" class="submitbutton" placeholder="Senden"></div>
                

                </form>
                    
        
                
                




            </div>
        </div>
    </div>
    













</body>
</html>