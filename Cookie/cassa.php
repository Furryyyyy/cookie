<html>
	<head>
		<title>Cassa Feltrinelli</title>
		 <meta charset="utf-8">
	</head>

	<body>
		<?php

			if (isset($_POST['Acquista'])) {
				$myBook = $_POST['libri'];
				$totale = 0;
				for($i=0; $i<count($myBook); $i++){
    			$totale = $totale + (int)$myBook[$i];
				}

				setcookie("totale_speso", "$totale", time()+180);
				header("Location:successfulBuy.php");
				exit();
			}
		?>
	</body>

</html>
