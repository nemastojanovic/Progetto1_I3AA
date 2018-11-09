<?php
session_start();

/*recupera le variabili*/
$nome = $_POST["nome"];
$cognome = $_POST["cognome"];
$dnascita = $_POST["dnascita"];
$civico = $_POST["civico"];
$citta = $_POST["citta"];
$NAP = $_POST["NAP"];
$ntelefono = $_POST["ntelefono"];
$email = $_POST["email"];
$sesso = $_POST["sesso"];
$hobby = $_POST["hobby"];
$ntelefono = $_POST["ntelefono"];
$professione = $_POST["professione"];


/*inserisco valore in varibaile di sessione*/

$_SESSION["nome"] = $nome;
$_SESSION["cognome"] = $cognome;
$_SESSION["dnascita"] = $dnascita;
$_SESSION["civico"] = $civico;
$_SESSION["citta"] = $citta;
$_SESSION["NAP"] = $NAP;
$_SESSION["ntelefono"] = $ntelefonon;
$_SESSION["email"] = $email;
$_SESSION["sesso"] = $sesso;
$_SESSION["hobby"] = $nome;
$_SESSION["ntelefono"] = $ntelefono;
$_SESSION["professione"] = $professione;

?>
<!DOCTYPE html>
<html>
  <head>	
	<style>
	  input[type=submit], button {
		width: 100%;
		background-color: #4CAF50;
		color: white;
		padding: 14px 20px;
		margin: 8px 0;
		border: none;
		border-radius: 4px;
		cursor: pointer;
	  }
	  
	  input[type=submit], button {
		background-color: #45a049;
	  }
	  
	  div {
		border-radius: 5px;
		background-color: #f2f2f2;
		padding: 15px;
	  }
	</style>
  </head>
  <body>
	<h1 style="text-align:center;border-bottom: 3px solid orange;">Pagina riassunto</h1>
	<br><br><br>
	<div>
	  <form action="Invio.php" method="POST">
		<h3><span style="color:#45a049;">Nome:</span><?php echo($_POST['nome']);?></h3>
		<h3><span style="color:#45a049;">Cognome:</span><?php echo($_POST['cognome']);?></h3>
		<h3><span style="color:#45a049;">Data di nascita:</span><?php echo($_POST['dnascita']);?></h3>
		<h3><span style="color:#45a049;">Num civico:</span><?php echo($_POST['civico']);?></h3>
		<h3><span style="color:#45a049;">Citta:</span><?php echo($_POST['citta']);?></h3>
		<h3><span style="color:#45a049;">NAP:</span><?php echo($_POST['NAP']);?></h3>
		<h3><span style="color:#45a049;">N Telefono:</span><?php echo($_POST['ntelefono']);?></h3>
		<h3><span style="color:#45a049;">Email:</span><?php echo($_POST['email']);?></h3>
		<h3><span style="color:#45a049;">Sesso:</span><?php echo($_POST['sesso']);?></h3>
		<h3><span style="color:#45a049;">Hobby:</span><?php echo($_POST['hobby']);?></h3>
		<h3><span style="color:#45a049;">Professione:</span><?php echo($_POST['professione']);?></h3>
		
		<button type="button" style="background-color:orange;" onclick="window.history.go(-1)">Correggi</button>
		<input type="submit" value="Registra" >
	  </form>
	  
	</div>
	
  </body>
</html>


