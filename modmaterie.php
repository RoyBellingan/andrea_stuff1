<?php
$conn=mysql_connect("localhost","studenti","studenti");
if(!$conn)
{
	echo("Errore della connessione a mysql.");
	exit();
}
mysql_select_db("studenti");
$codice = $_POST["cod_materia"];
echo "codice: $codice <br />";
$strSQL ="select nome_materia from materie where cod_materia=$codice";
include "modmaterieform.html";
$risultato=mysql_query($strSQL);
if (! $risultato){
	echo "errore nel comando di SELECT, la query era $strSQL";
	}
	$riga=mysql_fetch_row($risultato);
if (! $riga){
	echo "errore nel comando di SELECT 2, la query era $query";
	}
$nome=$riga[0];
echo "$nome";
?>


<form name="modifica" method="post" action="modmaterie1.php">
<input type="hidden" value="<?php echo $codice ?>" name="cod_materia">
Descrizione: <input type="text" value="<?php echo $nome ?>" name="nome_materia"><br>
<input type="submit" value="modifica">
</form>



<?php
mysql_close($conn);
?>
</body>
</head>
</html>