<?php
function dbconnect(){
   $connect = mysql_connect('localhost', 'root', '')or die(mysql_error());
   $db_selected = mysql_select_db('short_url', $connect)or die(mysql_error());
}
function generateurl($myurl=4)
{
   dbconnect();
   $mystring = 'abcdefghijklmnopqrstuvwxyz0123456789';
   return str_shuffle(
      substr(str_shuffle($mystring),0,$myurl)
  );
}
function geturl($in)
{
   dbconnect();
 
   do{
     $out = generateurl();
     $query = "SELECT short  FROM `shortenurl` WHERE `short` = '$out'";
	 $result = mysql_query($query);
   } while (mysql_num_rows($result) >1);
 
   $insert_query = "INSERT INTO `shortenurl` (`id`, `short`, `url`) VALUES (NULL, '$out', '$in');";
   $result = mysql_query($insert_query);
 
   return "http://mysite.com/".$out;
}
?>