<html>
	<head>
		<title>Verifica Dati</title>
		 <meta charset="utf-8">
	</head>
	
	<body>
		<?php
			
			$usernameUser = $_POST['username'];
			$passwordUser = $_POST['password'];
			
			if (!$usernameUser=="" and !$passwordUser==""){
				
				$isFound = false;
				$pass = false;
				$user = false;
				/*La funzione fopen restituisce il file aperto. In caso negativo viene visualizzato un messaggio*/
				$myfile = fopen("registrati.txt", "a+") or die("Unable to open file!"); 
				/*La funzione feof (end of file), fintanto che ho ancora del contenuto all'interno del file*/
				while(!feof($myfile) and !$isFound) {
					/*La funzione fgets permette di ottenere una riga del file*/
					$line = fgets($myfile);
					/*La funzione strtok divide la mia stringa(la riga) in stringhe più piccole */
					$token = strtok($line, " ");
					/*Fintanto che ci sono dei token */
					while ($token != false){
						if ($token == $usernameUser){
							$user = true;
						}
					
						if ($token == $passwordUser){
							$pass = true;
						}
						
						/*È come il nextToken di Java oppure se siamo utilizzati gli indici, gli indici, per passare al proprio token*/
						$token = strtok(" "); 
					}
				
					if ($user and $pass){
						$isFound = true;
					}
				
				}
			
				/*
				* Se l'utente clicca il tasto Login, si autentica. 
				* Se l'autenticazione avviene con successo, può procedere con la pagina principale. 
				*
				* Altrimenti visualizza "Accesso Negato. I dati inseriti non risultano presenti nel database."
				* Di conseguenza lascia la possibilità all'utente di ritornare al form di login/registrazione
				*/
				
				/* Se l'utente ha cliccato il tasto Botton "Login"*/
				if (isset($_POST['Login'])) {
					if ($isFound){
						header("Location:successfulLogin.php");
						exit();
					}else {
						header("Location:deniedLogin.php");
						exit();
					}
				}
			
				/*
				* Se l'utente è gia registrato viene indirizzato a una pagina intermedia che permette di conseguenza
				* all'utente di ritornare al form di login/registrazione. 
				*
				* Altrimenti viene inserito sia l'username che passoword in un file txt. Visualizza un messaggio di avvenuta
				* registrazione e lascia la possibilità all'utente di ritornare al form di login/registrazione.
				*/
				
				/* Se l'utente ha cliccato il tasto Botton "Register"*/
				if (isset($_POST['Register'])) { 
					/*Se non viene trovato inserisco sia username che la password in un file txt*/
					if (!$isFound){
						$txt = $usernameUser . " " . $passwordUser;
						fwrite($myfile, $txt);
						fwrite($myfile, "\n");
						
						header("Location:successfulRegister.php");
						exit();
					}else {
						header("Location:deniedRegister.php");
						exit();
					}
				}
				
				/* Chiudo il file*/
				fclose($myfile); 
				
			}else {
				header("Location:dataFieldError.php");
				exit();
			}

		?>
	</body>
	
</html>