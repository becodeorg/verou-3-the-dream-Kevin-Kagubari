<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exchange rate</title>
</head>
<body>
    
    
<h2>Currency Converter</h2>
	<form action="CurrencyConverter.php">
		Enter Currency : <input type="text" name = "input"/>
		Select Currency :
		<select name="dropdown" id="">
			<option value="USD">Euro $</option>
			<option value="EUR">USD €</option>
			<option value="GBP">British pound £</option>
			<option value="JPY">JPN ¥</option>
			<option value="AUD">AUD $</option>
			<option value="NZD">NZD $</option>
			<option value="CNY">CNY ¥</option>
		</select>
		<input type="submit" name= "sbmt" value="Convert">
	</form>
    
</body>
</html>

<?php

if(isset($_GET["sbmt"])){
	$cc_input = $_GET["input"];
	$cc_dropdwon = $_GET["dropdown"];

	if($cc_dropdwon == "USD"){
		
		$output = $cc_input * 0.879291;
		echo "<h1>" . $output . " USD" . "</h1>";
	}
	else if ($cc_dropdwon == "GBP"){

		$output = $cc_input * 1.19909;
		echo "<h1>" . $output . " GBP" . "</h1>";
	}
	else if ($cc_dropdwon == "JPY"){

		$output = $cc_input * 0.00763097 ;
		echo "<h1>" . $output . " JPY" . "</h1>";
	}
}

?>