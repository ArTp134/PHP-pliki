<?php
session_start();

if(empty($_SESSION["zalogowany"]))$_SESSION["zalogowany"]=0;
if($_GET["wyloguj"]=="tak"){$_SESSION["zalogowany"]=0;}

?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<BODY>
<br>
Formularz logowania
<form method="POST" action="weryfikuj.php">
Login:<input type="text" name="user" maxlength="20" size="20"><br>
Hasło:<input type="password" name="pass" maxlength="20" size="20"><br>
<input type="submit" value="Zaloguj"/>
</form>
</BODY>
</HTML>