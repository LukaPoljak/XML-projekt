<?php

$data=simplexml_load_file("mitologija.xml") or die("Error: Nije moguće učitati XML datoteku");

?>


<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="styles.css">
        <title>Index</title>
    </head>
    <body>
        <img src="img/Group 1.png" width="100%"/>
        <div class="mit">
            <img src="img/loki 1.png" />
            <div id="tekst">
                <h1><?php echo $data->nordska->lik->ime;?></h1>
                <p><?php echo $data->nordska->lik->opis;?></p>

</div>

        </div>
        <div class="mit">
            <img id="apollo" src="img/apollo.png" />
            <div id="tekst">
                <h1><?php echo $data->grcka->lik->ime;?></h1>
                <p><?php echo $data->grcka->lik->opis;?></p>

</div>

        </div>

        <div class="mit">
            <img id="svarog" src="img/svarog.jpg" />
            <div id="tekst">
                <h1><?php echo $data->slavenska->lik->ime;?></h1>
                <p><?php echo $data->slavenska->lik->opis;?></p>

</div>

        </div>
<br><br><br><br><br><br><br><br><br>
        <footer>
           <?php include("login.php")?>

</footer>
    </body>
</html>

