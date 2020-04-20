<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AnalazytorSite</title>
	<link href="styles.css" rel="stylesheet" type="text/css">
</head>

<body>
<header>
	<form method="POST">
		<b>IP Adresa:</b> 
		<input type="text" name="adress" placeholder="Zadejte IP adresu" required> 
		
		<b>Prefix:</b> 
		<input type="text" name="prefix"  placeholder="Zadejte Prefix" required>
		<input type="submit" value="Převod" id= "sub">
	</form>
</header>

<main>
<?php
	$adresa = explode(".", filter_input(INPUT_POST,"adress"));
	$prefix = filter_input(INPUT_POST, "prefix");
	$p = 0;
	for($i = 0; $i < 4; $i++){
		$bincislo[$p] = sprintf("%08d", decbin($adresa[$p]));
		$p++;
	}
	$maska = "";
# vypíše jedničky podle toho kolik je v prefixu
	for($g = 0; $g < $prefix; $g++){
		$maska .= "1";
	}
# Dopíše do proměnný 0  32 - 24 = 8 
	for($i = 0; $i <32 - $prefix; $i++){
		$maska .= "0";
    }
    # dělí prvky v poli 
	$maska = str_split($maska, 8);
	$network = [];
	$p = 0;
# vypočítá network
	for($i = 0; $i <= 3; $i++){
		$network[$i] = $maska[$i] & $bincislo[$i];
		}
# deklarace polí pro desítkové čísla
	$network_dec = [];
	$IP_dec = [];
	$maska_dec = [];

    $h = 0;
    #cyklus pro převod binárních čísel na desítkové
	for ($i = 0; $i < 4; $i++){
		$maska_dec[$h] = bindec($maska[$h]);
		$IP_dec[$h] = bindec($bincislo[$h]);
		$network_dec[$h] = bindec($network[$h]);
		$h++;
    }
    
    #sloučí prvky v poli do jednoho stringu podle
	$maska_dec = implode(".", $maska_dec);
	$IP_dec = implode(".", $IP_dec);
	$network_dec = implode(".", $network_dec);
	$network = implode(".", $network);
	$IP = implode(".", $bincislo);
	$maska = implode(".", $maska);


    #výpis jednotlivých výsledků v desítkové soustavě
	echo "<h2>IP adresa:</h2> Binárně:  <br>". $IP;
	echo "<div id = tb>  Decimálně: ". $IP_dec . " </div>";
	
	echo "<h2>Maska sítě: </h2> Binárně: <div id = tb>". $maska . " </div>";
	echo "<div id = tb> Decimálně: ". $maska_dec . " </div>";

	echo "<h2>Network:</h2> Binárně: <div id = tb>". $network . " </div>";
	echo "<div id = tb>  Decimálně: " . $network_dec . " </div>";
?>
</main>

</body>

</html>