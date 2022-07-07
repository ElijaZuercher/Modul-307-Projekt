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

    </div>

    <div class="container">
        <div class="andere">
            <div class="Textüberschrifft">
                <div class="textitem" >Id</div>
                <div class="textitem">Kunde</div>
                <div class="textitem">Status</div>
                <div class="textitem">Film</div>
            </div>
            <div class="ausgabesql">
                <?php 
                        foreach ($result as $ausleihe){
        	                echo("<div class='space'>"."<p class='pid'>".$ausleihe['id']."</p><p class='pname'>".$ausleihe['name']."</p><p class='pstatus'>".$ausleihe['ausleihstatus']."</p><p class='pfilm'>".$ausleihe['ausgeleihtesvideo']."</p></div>");
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
                        <div class="rechts"><input name="film" type="text" class="inputfield" placeholder="Ausgeleihtes Video"required></div>
                        <div class="mehrerauswahlen">Treue<select name="mitgliedschaft">
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