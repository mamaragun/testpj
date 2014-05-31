<?php
header ('Content-type: text/html; charset=utf-8');
include "config.php";

$SQL= "SELECT firstname , lastname , nickname , picture , comment FROM commentator";

echo "<table class='table table-border'>";

$objQuery = mysql_query($SQL) or die(mysql_error);
while($row = mysql_fetch_array($objQuery))

{
echo "<tr>";
echo "<td><img style='width:300px; height;200px;' src='".$row['picture']."'></td>";
echo "<td>".$row['firstname']."</td>";
echo "<td>".$row['lastname']."</td>";
echo "<td>".$row['nickname']."</td>";
echo "<td>".$row['comment']."</td>";
echo "</tr>";
}

echo "</table>";


?>
