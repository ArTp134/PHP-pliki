<?php
session_start();
if($_SESSION['zalogowany']){
	$tresc = $_POST['edycja'];
	$servername = "localhost";
	$username = "***";
	$password = "***";
	$dbname = "***";
	$conn = mysql_connect($servername, $username, $password, $dbname);
	mysql_select_db($dbname); 
	mysql_query("SET CHARSET utf8");
	mysql_query("SET NAMES `utf8` COLLATE `utf8_polish_ci`"); 
	$ID = $_SESSION['ID'];
	$query = "UPDATE strony SET tresc = '$tresc' WHERE ID = '$ID'";
	$sql = mysql_query($query);
	$_SESSION['ID'] = NULL;
	echo '<meta http-equiv="refresh" content="1; URL=index.php">';
} else {
	echo '<meta http-equiv="refresh" content="1; URL=index.php">';
}

?>