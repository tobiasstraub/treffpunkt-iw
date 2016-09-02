<!--
## Aufgabe ##
a) Erstellen Sie ein PHP-Dokument mit folgenden Eingabefeldern: Zahl1 und Zahl2 sowie einem  Absende-Button.
Anschließend legen Sie ein zweites PHP-Dokument an, welches die beiden Zahlen des ersten Dokuments, nach dem
dortigen "Klick" auf "Absenden", anzeigen soll. Zusätzlich soll auch das Ergebnis der Addition dieser beiden
Zahlen ausgegeben werden.

b) Erweitern Sie Ihr Programm, indem Sie mittels phpMyAdmin eine neue Datenbank anlegen. Erzeugen Sie innerhalb
dieser Datenbank eine Tabelle "Berechnungen" und legen Sie ein passendes Schema fest, um die beiden Zahlen
abspeichern zu können. Ergänzen Sie Ihr in Teilaufgabe a) erstelltes Dokument so, dass ankommende (valide) Anfragen,
nicht nur ausgegeben werden, sondern diese Zahlen auch in die Datenbank eingetragen werden.

c) Erweitern Sie Ihr Programm so, dass ein Protokoll der letzten sieben gespeicherten Berechnungen generiert wird.
Lassen Sie das Protokoll in Ihrem ersten Dokument anzeigen. Lesen Sie dabei die Daten aktiv aus der Datenbank aus.
-->

<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="UTF-8">
		<title>TREFFpunkt 10: Aufgabe 1</title>
	</head>
	<body>
		<form action="treffpunkt_iw_t10_a1_2.php" method="post">
			Zahl#1: <input type="text" name="zahl1"><br>
			Zahl#2: <input type="text" name="zahl2"><br>
			<input type="submit" value="Absenden" name="submit">

			<p>
				Protokoll:<br>
				<?php
				$con = new mysqli("localhost", "benutzername", "passwort", "datenbank-name")
				or die("Es konnte keine Verbindung zur Datenbank aufgebaut werden.");
				$result = $con -> query("SELECT * FROM Berechnungen ORDER BY id DESC LIMIT 7");
				while($row = $result->fetch_assoc()) {
					echo $row['zahl1'] . " + " . $row['zahl2'] . " = " . ($row['zahl1']+$row['zahl2']) . "<br>";
				}
				$con -> close();
				?>
			</p>
		</form>
	</body>
</html>
