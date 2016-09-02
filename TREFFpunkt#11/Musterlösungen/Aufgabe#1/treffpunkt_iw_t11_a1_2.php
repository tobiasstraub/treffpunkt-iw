<?php
if(isset($_POST['submit'])) {
	if($_POST['password'] == "123456") {
		setcookie("user", "user", time() + 30);
		header('Location: treffpunkt_iw_t11_a1_2.php');
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
	echo "<a href=\"treffpunkt_iw_t11_a1_1.php\">Zur&uuml;ck zu Seite 1</a>";
} else {
?>
<form action="treffpunkt_iw_t11_a1_2.php" method="post">
	Passwort: <input type="password" name="password">
	<input type="submit" name="submit" value="Einloggen">
</form>
<?php
}
?>
</body>
</html>
