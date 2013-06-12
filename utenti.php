<HTML>
<HEAD></HEAD>
<BODY>
<H2> Elenco utenti</H2>
<?php
$conn= mysql_connect("localhost","root", "prova");
if(!$conn)
{
echo("Errore connessione Mysql");
exit();
}
mysql_select_db("studenti");
$strSQL = "SELECT * FROM utenti";
$risultato= mysql_query($strSQL);
if(! $risultato)
{
 echo("errore nel comando SELECT");
 exit();
}
$riga= mysql_fetch_array($risultato);
while($riga)
{
  echo "cognome : ".$riga["cognome"]."<br />";
  echo "nome : ".$riga["nome"]."<br />";
  echo "email : ".$riga["email"]."<br />";
  echo "telefono : ".$riga["telefono"]."<br />";
  echo "indirizzo : ".$riga["indirizzo"]."<br />";
  echo "data di nascita : ".$riga["data"]."<br />";
  $riga = mysql_fetch_array($risultato);
}
mysql_close($conn);
?>
<input type="button" value="home" onclick="location.href='corsidirecupero.html'">
</BODY>
</HTML>
