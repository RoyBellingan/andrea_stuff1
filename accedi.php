<?php
$conn=mysql_connect("localhost","studenti","studenti");
if(!$conn)
{
	echo("Errore della connessione a mysql.");
	exit();
}
mysql_select_db("studenti");
$user =$_POST["username"];
$passw=$_POST["password"];
$ris=mysql_query("select * from utenti where username='$user' and password='$passw'");
if(mysql_num_rows($ris)==0)

{
   echo("utente inesistente");
   exit();
}
include "corsidirecupero.html";
$_session["username"]=$user;
$_session["password"]=$passw;
mysql_close($conn);
?>