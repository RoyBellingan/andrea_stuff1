<?php
$conn = mysql_connect("localhost", "root", "prova");
if(! $conn)
{
    echo ("errore connessione mysql");
    exit();
}
mysql_select_db("studenti");
$codut =$_POST["username"];
$passw=$_POST["password"];
include "gestioneutenti.html";
$strsql = "DELETE FROM utenti where username=$codmat";
echo($strsql);
if(! mysql_query($strsql))
{
   echo ("Errore nel comando DELETE");
   exit();
}
echo("utente cancellato");
mysql_close($conn);
?>
