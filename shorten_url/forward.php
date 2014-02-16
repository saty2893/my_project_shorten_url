<?php
	include 'connect_and_generate.php';
	
	$i = $_SERVER['QUERY_STRING'];
 
	if (preg_match("/^[0-9a-z]{4}$/", $i)) {
    dbconnect();
 
    $result = mysql_query("SELECT short, url FROM `short_urls` WHERE `short` = '$i'") or die(mysql_error());
 
    if (mysql_num_rows($result) < 1) {
        header("Location: http://domainthatuhave.me");
        exit;
    }else
	{
            $row = mysql_fetch_row($result);
	    header("Location: ".$row[1]);
	}
 
}
else
{
   header("Location: http://domainthatuhave.com");
}
?>