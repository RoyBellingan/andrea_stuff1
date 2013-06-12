<?php
$conn=mysql_connect("localhost","root","prova");
if(!$conn)
{
	echo("Errore della connessione a mysql.");
	exit();
}
mysql_select_db("studenti");

$cognomeut = $_POST["cognome"];
$nomeut = $_POST["nome"];
$user = $_POST["username"];
$passw = $_POST["password"];
$email = $_POST["email"];
$tel = $_POST["telefono"];
$indirizzo = $_POST["indirizzo"];

$strSQL ="INSERT INTO utenti(cognome,nome,username,password,email,telefono,indirizzo) VALUES ('$cognomeut','$nomeut','$user','$passw','$email','$tel','$indirizzo')";
echo ("$user");
if(!mysql_query($strSQL))
{
	echo("Errore comando inserimento");
	exit();
}
include'insutenteform.html';
echo("utente aggiunto");
mysql_close($conn);
?>