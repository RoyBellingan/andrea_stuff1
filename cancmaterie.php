<?php
$conn = mysql_connect("localhost", "studenti", "studenti");
if(! $conn)
{
    echo ("errore connessione mysql");
    exit();
}
mysql_select_db("studenti");
$codmat =$_POST["codice"];
$strsql ="SELECT nome_materia from materie where cod_materia=$codmat";
$query = mysql_query($strsql);
echo($strsql);
if (!$query)
{
	echo "materia inesistente";
        exit;
}
$riga=mysql_fetch_row($query);
if(!$riga)
{
 echo "materia inesistente";
}
else
{
$descr=$riga[0];
?>
<form name="cancella" method="post" action="cancmaterie1.php">
	<input type="hidden" value="<?php echo $codmat ?>" name="cod_materia">
	Descrizione: <input type="text" value="<?php echo $descr ?>" name="nome_materia"><br>
	<input type="submit" value="cancella">
</form>
<?php
}
  mysql_close($conn);
?>
