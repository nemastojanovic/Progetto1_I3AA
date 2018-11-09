<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
	<meta name = "description" content= "Form di inserimento">
	<meta name = "keywords" content = "HTML/CSS">
	<meta name = "author" content="Nemanja Stojanovic">
	<meta charset = "UTF-8">
	<meta http-equiv = "refresh" content = "60">
	
	<style>
	  input[type=text], select {
		width: 100%;
		padding: 12px 20px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box;
	  }
	  
	  input[type=date], select {
		width: 100%;
		padding: 12px 20px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box;
	  }
	  
	  input[type=number], select {
		width: 100%;
		padding: 12px 20px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box;
	  }
	  
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
		padding: 20px;
	  }
	</style>
	<script type="text/javascript">
	  function cancella(){
		document.registrazioni.nome.value="";
		document.registrazioni.cognome.value="";
		document.registrazioni.dnascita.value="";
		document.registrazioni.civico.value="";
		document.registrazioni.citta.value="";
		document.registrazioni.NAP.value="";
		document.registrazioni.ntelefono.value="";
		document.registrazioni.email.value="";
		document.registrazioni.sesso.value="";
		document.registrazioni.hobby.value="";
		document.registrazioni.professione.value="";
	  }
	  /*
	  function valdNumFon(){
		var num = document.getElementById("ntelefono").value;
		var reg = /^[0-9]*$/;
		
		if(num.length <= 20 && num.length >= 9){
		  if(!reg.test(num)){
		  	return false;
		  }else{
		  	return true;
		  }
		
		}else{
			return false;
		}
	  }
	  */
	</script>
  </head>
  <body>
	<h1 style="text-align:center;border-bottom: 3px solid #45a049;">Form di registrazione utenti</h1>
	<div>
	  <label style="color:red;">* Dati obbligatori</label><br><br>
	  <form action="PaginaRiassunto.php" name="registrazioni" method="post"> 
		<label for="fname">Nome <label style="color:red;" >*</label></label>
		<input type="text" id="nome" name="nome" title="Inserisci solo lettere" pattern="^[a-zA-Z\s]*$" value="<?php echo $_SESSION['nome'];?>" required>
		
		<label for="lname">Cognome <label style="color:red;">*</label></label>
		<input type="text" id="cognome" name="cognome" title="Inserisci solo lettere" pattern="^[a-zA-Z\s]*$" value="<?php echo $_SESSION['cognome'];?>" required>
		
		<label for="ldata">Data di nascita <label style="color:red; font:bold;">*</label></label>
		<input type="date" id="dnascita" name="dnascita"  pattern="^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[1,3-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$" value="<?php echo $_SESSION['dnascita'];?>" required>
		
		<label for="lNoCivico">No. civico <label style="color:red;">*</label></label>
		<input type="number" id="civico" name="civico" title="Inserisci solo cifre (3 massimo)" pattern="^[0-9]{3}$" max="999" value="<?php echo $_SESSION['civico'];?>" required>
		
		<label for="fname">Citta <label style="color:red;">*</label></label>
		<input type="text" id="citta" name="citta" pattern="^[a-zA-Z]+$" value="<?php echo $_SESSION['citta'];?>" required>
		
		<label for="NAP">NAP <label style="color:red;">*</label></label>
		<input type="number" id="NAP" name="NAP" pattern="^[0-9]{5}$" min="" value="<?php echo $_SESSION['NAP'];?>" required>
		
		<label for="ntelefono">No. telefono <label style="color:red;">*</label></label>
		<input type="text" id="ntelefono" name="ntelefono" pattern="^[0-9]*$" value="<?php echo $_SESSION['ntelefono'];?>" required>
		
		<label for="email">E-mail <label style="color:red;">*</label></label>
		<input type="text" id="email" name="email" placeholder="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value="<?php echo $_SESSION['email'];?>" required>
		
		<label for="sesso">Sesso  <label style="color:red;">*</label></label>
		<select id="sesso" name="sesso" required value="<?php echo $_SESSION['sesso'];?>"> 
		  <option value=""></option>
		  <option value="Maschio">Maschio</option>
		  <option value="Femmina">Femmina</option>
		</select>
		
		<label for="hobby" >Hobby</label>
		<input type="text" id="hobby" name="hobby" placeholder="" pattern="^[a-zA-Z]+$" value="<?php echo $_SESSION['hobby'];?>"> 
		
		<label for="professione" >Professione</label>
		<input type="text" id="professione" name="professione" placeholder="" pattern="^[a-zA-Z]+$" value="<?php echo $_SESSION['professione'];?>">
		
		<button type="button" onclick="cancella()" style="background-color:#ff4d4d;" >Cancella</button>
		<input type="submit" value="Invia">
	  </form>
	</div>	
  </body>
</html>
<?php
session_destroy();
?>