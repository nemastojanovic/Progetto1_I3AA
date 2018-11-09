<?php
session_start();

$nome = $_SESSION['nome'];
$cognome = $_SESSION['cognome'];
$dnascita = $_SESSION['dnascita'];
$civico = $_SESSION['civico'];
$citta = $_SESSION['citta'];
$NAP = $_SESSION['NAP'];
$ntelefono = $_SESSION['ntelefono'];
$email = $_SESSION['email'];
$sesso = $_SESSION['sesso'];
$hobby = $_SESSION['hobby'];
$professione = $_SESSION['professione'];


//File da creare
$file = 'Registrazioni/Registrazioni_tutte.csv';

//Testo da inserire nel file csv
$contents = "$nome; $cognome; $dnascita; $civico; $citta; $NAP; $ntelefono; $email; $sesso; $hobby; $professione";
//Salvare il contenuto nel file
file_put_contents($file, $contents.PHP_EOL, FILE_APPEND);


$data = date("Y-m-d h:i:sa");

//File da creare con la data della registrazione, rispettando il formato richiesto nel QDC(yyyy-mm-gg)
$name='Registrazioni/Registrazione_'.date('Y-m-d').'.csv';

//Testo da inserire nel file csv come prova
$contents = "$nome; $cognome; $dnascita; $civico; $citta; $NAP; $ntelefono; $email; $sesso; $hobby; $professione; $data";
//Salvare il contenuto nel file
file_put_contents($name, $contents.PHP_EOL, FILE_APPEND);
  
echo file_get_contents($name);


?>
<html>
  <head>
	<style>
	button {
		width: 100%;
		background-color: #4CAF50;
		color: white;
		padding: 14px 20px;
		margin: 8px 0;
		border: none;
		border-radius: 4px;
		cursor: pointer;
	}
	
	button {
		background-color: #45a049;
	}
	</style>
  </head>
  <body>
	<br><br><br>
	<button name="button" onclick="location.href='Benvenuto.html'">Home</button>
  </body>
</html>
<?php
	session_destroy();
?>
