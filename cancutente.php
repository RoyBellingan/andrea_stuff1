<?php
$conn = mysql_connect("localhost", "root", "prova");
if(! $conn)
{
    echo ("errore connessione mysql");
    exit();
}
mysql_select_db("studenti");
$codut =$_POST["username"];
$strsql ="SELECT username from utenti where username=$codut";
$query = mysql_query($strsql);
echo($strsql);
if (!$query)
{
	echo "utente inesistente";
        exit;
}
$riga=mysql_fetch_row($query);
if(!$riga)
{
 echo "utente inesistente";
}
else
{
$descr=$riga[0];
?>
<form name="cancella" method="post" action="cancutente1.php">
	<input type="hidden" value="<? echo $codut ?>" name="username">
	password: <input type="text" value="<? echo $descr ?>" name="password"><br>
	<input type="submit" value="cancella">
</form>
<?php
}
  mysql_close($conn);
?>
