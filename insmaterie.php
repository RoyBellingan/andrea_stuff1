<?php
$conn=mysql_connect("localhost","studenti","studenti");
if(!$conn)
{
	echo("Errore della connessione a mysql.");
	exit();
}
mysql_select_db("studenti");
$codice = $_POST["codice"];
$materia = $_POST["descrizione"];
$strSQL ="INSERT INTO materie(cod_materia,nome_materia)";
$strSQL .="VALUES ($codice,'$materia')";
$query = mysql_query($strSQL);
if(!$query)
{
	include "insmaterieform.html";	
	echo("Errore comando inserimento");
	exit();
}
include "insmaterieform.html";
echo("Materia aggiunta");
mysql_close($conn);
?>