<?php include "dbconf.php"?>
<?php

$SQL= "SELECT firstname , lastname , nickname , picture , detail FROM commentator";

$objQuery = mysql_query($SQL) or die(mysql_error());
while($row = mysql_fetch_array($objQuery))
{

echo "<div class='jumbotron'><div class ='big_fram' style='' align='center'   ><div class= 'big_face'>".
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


}



?>
