<?php
$email = $_POST["Email"];
$pass = $_POST["pass"];
$op = $_POST["radio"];
if ($op = 1) {
	$url_do_arquivo = "https://docs.google.com/spreadsheets/d/e/2PACX-1vR2S5zDeC_s_ss7m75S5_IWAq6X-hP1K7ObgqEJPlTPVDc3AgTV7JQkA_8d4JJm3LCtNNZW3G4Y9L-Y/pub?gid=320451802&single=true&output=csv";
	$e = 4;
	$f = 5;
	$g = 6;
}elseif ($op = 0) {
	$url_do_arquivo = "https://docs.google.com/spreadsheets/d/e/2PACX-1vQ6h1RQM8ve9B9vB-cwH1lRyC95NwmB0b_28p51fZzOltMn_SttWeCUdH38B05ITvCC5Thpzh8zzIWm/pub?gid=2132884969&single=true&output=csv";
	$e = 3;
	$f = 2;
	$g = 2;
}

if (($identificador = fopen($url_do_arquivo, 'r')) !== FALSE) {
    $con = 1;
    while (($linha_do_arquivo = fgetcsv($identificador, 0, ",")) !== FALSE) {
        if($con !== 1 ){
        	if ($email == $linha_do_arquivo[$e] and ($linha_do_arquivo[$f] == $pass or $linha_do_arquivo[$g] == $pass)) {
        		$a  = true;
        		break;
        	}else{$a = false;}
        }
		$con += 1;       
    }
    if ($a == false) {
    	header("Location: login.html");
    }
    fclose($identificador);
} else {
    echo 'Login nao reconhecido';
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bem vindo! </title>
	<style type="text/css">
		body {
			background-image:url("fundo.png");
		}
	</style>
</head>
<body>
<h1>Bem vindo : <?=$email?></h1><br>
<h3><a href="professores.php">Professores</a></h3>
</body>
</html>