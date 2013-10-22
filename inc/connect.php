<?php

$server   = 'localhost';
$user  	  = 'root';
$password = '';
$database = 'htype';


$connect = mysql_connect($server, $user, $password);
$db = mysql_select_db($database, $connect);

date_default_timezone_set('Europe/Helsinki');


?>