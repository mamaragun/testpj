<?php
header ('Content-type: text/html; charset=utf-8');
include "config.php";

$SQL= "SELECT firstname , lastname , nickname , picture , detail FROM commentator";


$objQuery = mysql_query($SQL) or die(mysql_error);
while($row = mysql_fetch_array($objQuery))
{

echo  "<div class='jumbotron'><div class ='big_fram' style='' align='center'   ><div class= 'big_face'>".
"<img style='width:300px; height;200px;' src=".$row['picture']." > ".
  "</div>".
"</div>";

echo  "<div class='jumbotron'><div class ='big_fram' style='' align='center'   ><div class= 'big_face'>".
"<img style=width:300px; height;200px; src=".$row['picture'].">".
  "</div>".
"</div>".

 "<h2>".$row['firstname']." ".$row[lastname]." (".$row[nickname].")</h2>".
"<br>".
"<br>".

"<div>".
  "<p>".
"<a class='btn btn-danger btn-lg' role='button' style='' >คะแนน 8/10</a>".
"<a class='btn btn-primary btn-lg' role='button' >Read more & Comment</a></p>".
"</div>".
"</div>";

echo "<table class='table table-border'>";
echo "<tr>";
echo "<td><img style='width:300px; height;200px;' src='".$row['picture']."'></td>";
echo "<td>".$row['firstname']."</td>";
echo "<td>".$row['lastname']."</td>";
echo "<td>".$row['nickname']."</td>";
echo "<td>".$row['detail']."</td>";
echo "</tr>";
echo "</table>";

}



?>
