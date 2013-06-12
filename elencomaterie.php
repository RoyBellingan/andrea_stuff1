<HTML>
<HEAD></HEAD>
<BODY>
<h3>Corsi di recupero</h3>
<div style="width:300px;height:300px;float:left;">
<dt>
<TABLE BORDER="1" border color='#FDF5E6' cellpadding="5" align="center" bgcolor='#FDF5E6'>
<TR>
<TD><h4>GESTIONE MATERIA</h4></TD>
</TR>
<TR>
<TD><h4> <a href="gelocalizzazione.html">Gelocalizzazione</h4></TD>
</TR>
<TR>
<TD><h4> <a href="gestioneutente.html">Utenti</h4></TD>
</TR>
<TR>
<TD><h4> Docenti</h4></TD>
</TR>
<TR>
<TD><h4> Voti</h4></TD>
</TR>
<TR>
<TD><h5><a href="index.html">Esci dall'account</h5></H3></TD>
</TR>
</TABLE>
</div>
<div style="width:100px;height:10px;float:left;">
</div>

<div style="width:300px;height:300px;float:left;">
<ul>
<TABLE BORDER="1" border color='#FDF5E6' cellpadding="5"  bgcolor='#FDF5E6'>
<TR>
<TD><h4><a href="insmaterieform.html">inserimento</h4></TD>
</TR>
<TR>
<TD><h4><a href="modmaterieform.html">modifica</a></h4></TD>
</TR>
<TR>
<TD><h4><a href="cancmaterieform.html">cancellazione</a></h4></TD>
</TR>
<TR>
<TD><h4>ELENCO</h4></TD>
</TR>
</ul>
</div>

<div style="width:300px;height:300px;float:left;">

<?php
$conn= mysql_connect("localhost","studenti", "studenti");

if(!$conn)
{
echo("Errore connessione Mysql");
exit();
}

mysql_select_db("studenti");
$strSQL = "SELECT * FROM materie";
$risultato= mysql_query($strSQL);

if(! $risultato)
{
 echo("errore nel comando SELECT");
 exit();
}
$riga= mysql_fetch_array($risultato);
while($riga)
{
  echo "codice = ".$riga["cod_materia"];
  echo "descrizione = ".$riga["nome_materia"]."<br />";
  $riga = mysql_fetch_array($risultato);
}
mysql_close($conn);
?>
</div>

</BODY>
</HTML>
