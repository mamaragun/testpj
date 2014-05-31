<?

    $db_server_ip ="localhost";     //server_ip
    $db_username="ratchaprasong";        //user login
    $db_password="ratchaprasong";               //user password
    $db_name="ratchaprasong";              //database instant


    $objConnect = mysql_connect ($dbhost, $dbuser, $dbpass) or die("Could not connect: " . mysql_error());
    mysql_select_db($db_name) or die ("Can't connect ");
mql_query("SET character_set_results=utf8");
mysql_query("SET character_set_client =utf8");
mysql_query("SET character_set_connection=utf8");

?>

