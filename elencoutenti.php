<HTML>
<HEAD></HEAD>
<BODY>
<H3> Corsi di recupero</H3>

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
<TD><h4>INSERIMENTO</h4></TD>
</TR>
<TR>
<TD><h4><a href="modmaterieform.html">modifica</a></h4></TD>
</TR>
<TR>
<TD><h4><a href="cancmaterieform.html">cancellazione</a></h4></TD>
</TR>
<TR>
<TD><h4>ELENCO</a></h4></TD>
</TR>
</ul>
</div>

<div style="width:600px;height:300px;float:left;">
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
$riga= mysql_fetch_row($risultato);
echo "<TABLE BORDER='1'>
<TR>     
        <TD><B>cognome</B></TD>
	<TD><B>nome</B></TD>
	<TD><B>username</B></TD>
	<TD><B>password</B></TD>
	<TD><B>mail</B></TD>
	<TD><B>telefono</B></TD>
</TR>
";
while($riga)
{
echo "
<TR>
        <TD> $riga[0] </TD>
        <TD> $riga[1] </TD>
        <TD> $riga[2] </TD>
        <TD> $riga[3] </TD>
        <TD> $riga[4] </TD>
        <TD> $riga[5] </TD>
</TR>";
  $riga = mysql_fetch_array($risultato);
}
echo "</table>";
mysql_close($conn);
?>

</div>
</BODY>
</HTML>
