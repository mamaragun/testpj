<?php
header ('Content-type: text/html; charset=utf-8');
include "config.php";

$SQL=mysql_query("SELECT firstname , lastname , nickname , picture , comment FROM commentator");

echo "<table class='table table-border'>";

$objQuery = mysql_query($SQL) or die(mysql_error);
while($row=mysql_fetch_array($objQuery){
echo "<tr>";
echo "<td>".$row['firstname']."</td>";
ehco "</tr>";
}

echo "</table>";


?>
