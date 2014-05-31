<?

header ('Content-type: text/html; charset=utf-8');
include "lib/json_th.php";
include "config.php";

$SQL=mysql_query("SELECT firstname , lastname , nickname , picture , comment FROM commentator");

while($row=mysql_fetch_assoc($result,MYSQL_ASSOC)) $output[]=$row;
	print "{\"Data\": ";
	print(json_encode($output));
	print "}";
	mysql_free_result($result);
	mysql_close();


?>