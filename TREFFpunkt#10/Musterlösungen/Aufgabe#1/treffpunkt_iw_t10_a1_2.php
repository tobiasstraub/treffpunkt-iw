<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="UTF-8">
		<title>TREFFpunkt 10: Aufgabe 1</title>
	</head>
	<body>
		<?php
		if(isset($_POST['submit'])) {
			$zahl1 = !empty($_POST['zahl1']) ? $_POST['zahl1'] : 'keine Zahl eingegeben';
			$zahl2 = !empty($_POST['zahl2']) ? $_POST['zahl2'] : 'keine Zahl eingegeben';
		?>

			Übergebene Zahl#1 lautet: <?php echo $zahl1; ?><br>
			Übergebene Zahl#2 lautet: <?php echo $zahl2; ?><br>
			Das berechnete Ergebnis der beiden Zahlen lautet: <?php echo ($zahl1+$zahl2); ?>

			<?php
			$con = new mysqli("localhost", "benutzername", "passwort", "datenbank-name")
			or die("Es konnte keine Verbindung zur Datenbank aufgebaut werden.");
			$con -> query("INSERT INTO Berechnungen(id, zahl1, zahl2) VALUES('', '" . $zahl1 . "', '" . $zahl2 . "')");
			$con -> close();
		} else {
			echo "Das Formular wurde nicht abgeschickt!";
		}
			?>
	</body>
</html>
