<?php
$conn = mysql_connect("localhost", "studenti", "studenti");
if(! $conn)
{
    echo ("Errore durante la connessione a MySql.");
    exit();
}
mysql_select_db("studenti");
echo "<pre>";
print_r($_POST);
echo "<pre>";
$codice =$_POST["cod_materia"];
$materia=$_POST["nome_materia"];
include "modmaterieform.html";
$strsql = "UPDATE materie
           SET nome_materia = '$materia'
           where cod_materia = $codice";
if(! mysql_query($strsql))
{
   echo ("Errore nel comando UPDATE");
   exit();
}
echo("materia aggiornata");
mysql_close($conn);
?>