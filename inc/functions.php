<?php

require_once 'connect.php';

function rememberText(){
	if(isset($_POST['hash'])){
		echo 'value="' . $_POST['hash'] . '"';
	}
}

function searchLogInsert($hash){

	$hash = $_POST['hash'];
	$ip = mysql_real_escape_string($_SERVER['REMOTE_ADDR']);
	$searchword = mysql_real_escape_string(htmlentities($hash));
	$date = mysql_real_escape_string(date('Y-m-d H:i:s'));

		$sql = mysql_query("INSERT INTO searchlog (ip, searchword, date) VALUES ('$ip', '$searchword', '$date')");
}


function ipLogInsert(){

	$ip = mysql_real_escape_string($_SERVER['REMOTE_ADDR']);
	$page = mysql_real_escape_string(htmlentities($_SERVER['REQUEST_URI']));
	$useragent = mysql_real_escape_string($_SERVER['HTTP_USER_AGENT']);
	$date = mysql_real_escape_string(date('Y-m-d H:i:s'));
	
	if(isset($_SERVER['HTTP_REFERER'])){
		$referer = $_SERVER['HTTP_REFERER'];
	} else{
		$referer = '';
	}

		$sql = mysql_query("INSERT INTO iplog (ip, page, referer, useragent, date) VALUES ('$ip', '$page', '$referer', '$useragent', '$date')");
}


function adminloginLogInsert(){

	if(isset($_POST['login'])){

	$ip = mysql_real_escape_string($_SERVER['REMOTE_ADDR']);
	$page = mysql_real_escape_string(htmlentities($_SERVER['REQUEST_URI']));
	$useragent = mysql_real_escape_string($_SERVER['HTTP_USER_AGENT']);
	$username = mysql_real_escape_string($_POST['username']);
	$password = mysql_real_escape_string($_POST['password']);
	$date = mysql_real_escape_string(date('Y-m-d H:i:s'));


		$sql = mysql_query("INSERT INTO adminlog (username, password, ip, page, useragent, date) VALUES ('{$username}', '{$password}', '{$ip}', '{$page}', '{$useragent}', '{$date}')");
	}
}

function contactLogInsert(){

	$ip 		= mysql_real_escape_string($_SERVER['REMOTE_ADDR']);
	$page 		= mysql_real_escape_string(htmlentities($_SERVER['REQUEST_URI']));
	$useragent	= mysql_real_escape_string($_SERVER['HTTP_USER_AGENT']);
	$message 	= mysql_real_escape_string(htmlentities($_POST['message']));
	$email		= mysql_real_escape_string(htmlentities($_POST['email']));
	$date 		= mysql_real_escape_string(date('Y-m-d H:i:s'));
	
	$sql = mysql_query("INSERT INTO feedback (ip, page, useragent, feedback, email, date) VALUES ('{$ip}', '{$page}', '{$useragent}', '{$message}', '{$email}', '{$date}')");
	
	if($sql){
	
		echo "<p>Thank you for contacting us.</p>";
	
	}
	else{
	
		echo "<p>The message could not be sent, please try again later.</p>";
	
	}

}

function hashCreatorLogInsert(){

	$ip = mysql_real_escape_string($_SERVER['REMOTE_ADDR']);
	$page = mysql_real_escape_string(htmlentities($_SERVER['REQUEST_URI']));
	$useragent = mysql_real_escape_string($_SERVER['HTTP_USER_AGENT']);
	$text = mysql_real_escape_string(htmlentities($_POST['text']));
	$date = mysql_real_escape_string(date('Y-m-d H:i:s'));
	
	$sql = mysql_query("INSERT INTO hashcreator (ip, page, useragent, text, date) VALUES ('{$ip}', '{$page}', '{$useragent}', '{$text}', '{$date}')") or die(mysql_error());


}


function indexLog(){

	$result = mysql_query("SELECT * FROM iplog ORDER BY id DESC LIMIT 100");

		while($row = mysql_fetch_array($result)){
	
			echo '<tr><td><a href="http://whois.domaintools.com/' . $row['ip'] . '">' . $row['ip'] . '</a></td>';
			echo "<td>" . $row['page'] . "</td>";
			echo "<td>" . $row['referer'] . "</td>";
			echo "<td><abbr class=\"timeago\" title=\"" . $row['date'] . "\">" . $row['date'] . "<abbr></td></tr>";
		}
}

function adminLog(){
	
	$result = mysql_query("SELECT * FROM adminlog ORDER BY id DESC LIMIT 100");

		while($row = mysql_fetch_array($result)){
	
			echo '<tr><td><a href="http://whois.domaintools.com/' . $row['ip'] . '">' . $row['ip'] . '</a></td>';
			echo "<td>" . $row['username'] . "</td>";
			echo "<td>" . $row['password'] . "</td>";
			echo "<td>" . $row['page'] . "</td>";
			echo "<td>" . $row['useragent'] . "</td>";
			echo "<td><abbr class=\"timeago\" title=\"" . $row['date'] . "\">" . $row['date'] . "<abbr></td></tr>";
		}	
}

function searchLog(){
	
	$result = mysql_query("SELECT * FROM searchlog ORDER BY id DESC LIMIT 100");

		while($row = mysql_fetch_array($result)){
	
			echo '<tr><td><a href="http://whois.domaintools.com/' . $row['ip'] . '">' . $row['ip'] . '</a></td>';
			echo "<td>" . chunk_split($row['searchword'], 100, "<br />\n") . "</td>";
			echo "<td><abbr class=\"timeago\" title=\"" . $row['date'] . "\">" . $row['date'] . "<abbr></td></tr>";
		}

}

function feedbackLog(){

	$result = mysql_query("SELECT * FROM feedback ORDER BY id DESC LIMIT 100");
	
		while($row = mysql_fetch_array($result)){
		
			echo '<tr><td><a href="http://whois.domaintools.com/' . $row['ip'] . '">' . $row['ip'] . '</a></td>';
			echo "<td>" . $row['page'] . "</td>";
			echo "<td>" . $row['feedback'] . "</td>";
			echo "<td><abbr class=\"timeago\" title=\"" . $row['date'] . "\">" . $row['date'] . "<abbr></td></tr>";
		
		}

}

function hashCreatorLog(){

	$result = mysql_query("SELECT * FROM hashcreator ORDER BY id DESC LIMIT 100");
	
		while($row = mysql_fetch_array($result)){
	
			echo '<tr><td><a href="http://whois.domaintools.com/' . $row['ip'] . '">' . $row['ip'] . '</a></td>';
			echo "<td>" . $row['page'] . "</td>";
			echo "<td>" . $row['useragent'] . "</td>";
			echo "<td>" . $row['text'] . "</td>";
			echo "<td><abbr class=\"timeago\" title=\"" . $row['date'] . "\">" . $row['date'] . "<abbr></td></tr>";
		}


}

?>