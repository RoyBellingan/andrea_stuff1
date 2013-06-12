<?php
$conn = mysql_connect("localhost", "root", "prova");
if(! $conn)
{
    echo ("errore connessione mysql");
    exit();
}
mysql_select_db("studenti");
$codmat =$_POST["cod_materia"];
$nomemat=$_POST["nome_materia"];
include "cancmaterieform.html";
$strsql = "DELETE FROM materie where cod_materia=$codmat";
echo($strsql);
if(! mysql_query($strsql))
{
   echo ("Errore nel comando DELETE");
   exit();
}
echo("materia cancellata");
mysql_close($conn);
?>
