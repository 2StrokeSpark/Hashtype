<?php

$server   = 'mysql9.000webhost.com';
$user  	  = 'a7841416_root';
$password = 'Lol1lol2';
$database = 'a7841416_htype';


$connect = mysql_connect($server, $user, $password);
$db = mysql_select_db($database, $connect);

date_default_timezone_set('Europe/Helsinki');


?>