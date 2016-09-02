<!--
## Aufgabe ##
Erstellen Sie mittels PHP einen geschützten Bereich, der nur von angemeldeten Benutzern eingesehen werden kann.
Erstellen Sie dazu zwei PHP-Dateien. Der Benutzer kann sich auf allen zwei Seiten einloggen.
Sollte er sich aber bereits auf einer der beiden Seiten eingeloggt haben,
muss er sich auf der anderen Seite nicht erneut einloggen und kann direkt den Content einsehen.
Lösen Sie die Problemstellung mittels Cookies. Der Login soll durch ein Passwort geschützt sein.
Nach dem Login soll sofort der Content angezeigt werden. Weiterhin soll der Benutzer nach 30 Sekunden
automatisch ausgeloggt werden.
-->
<?php
if(isset($_POST['submit'])) {
	if($_POST['password'] == "123456") {
		setcookie("user", "user", time() + 30);
		header('Location: treffpunkt_iw_t11_a1_1.php');
	} else {
		echo "Falsches Passwort.";
	}
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
<title>TREFFpunkt 11: Aufgabe 1</title>
</head>
<body>
<?php
if(isset($_COOKIE['user'])) {
	echo "Sie sind eingeloggt.<br>";
	echo "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
	labore et dolore magna aliquyam erat, sed diam voluptua.<br>";
	echo "<a href=\"treffpunkt_iw_t11_a1_2.php\">Weiter zu Seite 2</a>";
} else {
?>
<form action="treffpunkt_iw_t11_a1_1.php" method="post">
	Passwort: <input type="password" name="password">
	<input type="submit" name="submit" value="Einloggen">
</form>
<?php
}
?>
</body>
</html>
