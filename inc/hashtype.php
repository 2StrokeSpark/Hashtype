<?php

require_once('functions.php');

if(isset($_POST['send'])){	


	$hash = $_POST['hash'];
	
	searchLogInsert($hash);

	
		if(preg_match("(^[a-z0-9]{32}$)", $hash)){
			echo "\n<h2>MD5</h2>\n";
		}
		
		elseif(preg_match("(^[a-z0-9]{40}$)", $hash)){
			echo "\n<h2>SHA-1</h2>\n";
		}
		
		elseif(preg_match("(^[a-z0-9]{16}$)", $hash)){
			echo "\n<h2>MySQL</h2>\n";
		}
		
		elseif(preg_match("(^\*[A-Z0-9]{40}$)", $hash)){
			echo "\n<h2>MySQL 5</h2>\n";
		}
			
		elseif(preg_match("\$H\$", $hash)){
			echo "\n<h2>MD5(phpBB3)</h2>\n";
		}
		
		elseif(preg_match("\$P\$", $hash)){
			echo "\n<h2>MD5(Wordpress)</h2>\n";
		}
		
		elseif(preg_match("\$1\$", $hash)){
			echo "\n<h2>MD5(Unix)</h2>\n";
		}
						
		elseif(preg_match("(^[a-z0-9]{64}$)", $hash)){
			echo "\n<h2>SHA-256</h2>";
		}
							
		elseif(preg_match("(^[a-z0-9]{128}$)", $hash)){
			echo "\n<h2>SHA-512</h2>";
		}
									
		elseif(preg_match("(^[A-Z0-9]{8}\-[A-Z0-9]{4}\-[A-Z0-9]{4}\-[A-Z0-9]{4}-[A-Z0-9]{12}$)", $hash)){
			echo "\n<h2>UUID</h2>\n";
		}

		else{
			echo "<p>The hash could not be identified.</p>";
		}
		
}
?>