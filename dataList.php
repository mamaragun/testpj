<?
"echo test";
header ('Content-type: text/html; charset=utf-8');
include "lib/json_th.php";
include "config.php";

$SQL=mysql_query("SELECT firstname , lastname , nickname , picture , comment FROM commentator");

echo "<table class='table table-border'>";

$objQuery = mysql_query($SQL);
while($row=mysql_fetch_array($objQuery){
echo "<tr>";
echo "<td>".$row['firstname']."</td>";
ehco "</tr>";
}

echo "</table>";


?>
