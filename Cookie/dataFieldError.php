<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Feltrinelli Login Popup</title>
    <link rel="stylesheet" href="style.css">
  </head>
  
  <body>
	<form class="contenitoreForm" action="#" method="post">
		<p>
			<font color = "#ff0a0a"> I campi dati non possono essere lasciati vuoti. </font>
		</p>
		
		<input type="submit" name="Vai" value="Torna alla pagina di Login e Registrazione!">
		
	</form>
  </body>
</html>

<?php
  
	if (isset($_POST['Vai'])) {
		header("Location:formLogin.html");
		exit();
	}
?>