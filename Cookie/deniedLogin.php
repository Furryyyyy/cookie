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
			<font color = "#ff0a0a"> Accesso Negato. I dati inseriti non risultano presenti nel database o sono sbagliati. </font>
		</p>
		
		<input type="submit" name="Vai" value="Vai alla pagina di Login">
		
	</form>
  </body>
</html>

<?php
  
	if (isset($_POST['Vai'])) {
		header("Location:formLogin.html");
		exit();
	}
?>
