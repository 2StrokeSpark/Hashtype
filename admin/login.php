<?php

if(isset($_POST['send'])){

	if(($_POST['username']) == 'Zora' && ($_POST['password']) == 'hejhejhej123' ){
	
		$_SESSION['admin'] = TRUE;
		
		header('Location: adminpage.php');
	
	
	}
	
	else{
	
		echo "<p>Username and/or password is incorrect.</p>";
	
	}

}




?>