<?php
// Set time zone
# Database Configuration 
$dbuser = 'ratchaprasong';
$dbpass = 'ratchaprasong';
$dbhost = 'localhost';
$dbname = 'ratchaprasong';
 
$objConnect = mysql_connect ($dbhost, $dbuser, $dbpass) or die("Could not connect: " . mysql_error());
                        mysql_select_db($dbname) or die("Can't Select this Database");
                        mysql_query("SET NAMES UTF8");
                        mysql_query("SET character_set_results=utf8");
                        mysql_query("SET character_set_client=utf8");
                        mysql_query("SET character_set_connection=utf8");
                       
 
