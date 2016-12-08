<?php
session_start();

?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</HEAD>
<BODY>
<?php
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$servername = "localhost";
	$username = "***";
	$password = "***";
	$dbname = "***";
	$conn = mysql_connect($servername, $username, $password, $dbname);
	mysql_select_db($dbname);
		if(!conn) { echo "Błąd BD"; } 
	$sql = "SELECT * FROM users WHERE name='$user'";
	$result = mysql_query($sql); 
	$rekord = mysql_fetch_array($result); 
	if(!$rekord) {
		mysql_close($conn); 
		echo "Brak użytkownika o takim loginie !"; 
	}
	else{ 
		if($rekord['pass']==$pass) {
		$_SESSION['zalogowany']=1;
		echo '<meta http-equiv="refresh" content="1; URL=index.php">';
		}
		else{
		mysql_close($conn);
		$_SESSION['zalogowany']=0;
		echo "Złe dane logowania!"; 
		echo '<br><a href="index.php" style="">Wróć do formularza</a></p>';	
		}
	}
?>
</BODY>
</HTML>