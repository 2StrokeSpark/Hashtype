<?php
$hashfunctions = array("MD5", "SHA-1", "MySQL", "MySQL5", "MD5(phpBB3)", "MD5(Wordpress)", "MD5(Unix)", "SHA-256", "SHA-512", "UUID");

echo "<h2>Supported hash functions:</h2>";
echo '<ul id="hashlist">';

foreach($hashfunctions as $hashfunction){
    
    echo "<li>" . $hashfunction . "</li>";
    
}

echo "</ul>";  

?>




