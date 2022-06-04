<!DOCTYPE HTML>

<style>
    body{
        text-align:center;
    }
</style>


<html>
    <head>
    <meta charset="utf-8">
        <title>Login</title>
</head>
<body>
    <h1>LOGIN</h1>
    <form action="" method="post">
        <label name="nadimak">Nadimak:</label><br>
        <input type="text" id="nadimak" name="nadimak"/><br><br>
        <label name="lozinka">Lozinka:</label><br>
        <input type="password" id="lozinka" name="lozinka"/><br><br>
        <button type="submit">Pošalji</button>
</form>
</body>
</html>


<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$form=$_POST;

	if (empty($form["nadimak"]))  {
        	echo "<br>Niste unijeli nadimak";
		
    		}
	else if (empty($form["lozinka"]))  {
        	echo "<br>Niste unijeli lozinku";
		
    		}
	else {
		$nadimak= $form["nadimak"];
		$lozinka= $form["lozinka"];
	
		logiranje($nadimak,$lozinka);
	}
}


function logiranje($n, $l){
    $xml=simplexml_load_file("korisnici.xml");
    foreach($xml->korisnik as $kor){
        $nad=$kor->nadimak;
        $loz=$kor->lozinka;
        if($nad==$n){
            if($loz==$l){
                echo "<h2><br>Ulogirani ste kao $n.<h2>";
                $login=true;
                return;
            }else{
                echo "<br>Kriva lozinka!";
                return;
            }
        }else{
            echo "<br>Korisnik ne postoji.";
            return;
        }
    }
}

?>