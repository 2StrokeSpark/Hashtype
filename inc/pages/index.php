<div id="box">
	<a title="Hashtype" href="index.php?p=index" id="logo"></a>
	
		<div id="hash_form">
			<form action="index.php" method="post">
				<input type="text" name="hash" placeholder="baf5254ceeddd349faa9d9a49244412cb9d4ce23" autofocus <?php rememberText(); ?> />
				<input type="submit" name="send" value="Get type"/>
			</form>
		</div>
			
			<?php include_once ('inc/hashtype.php'); ?>

</div>

	<div id="bottombox">
		
		<?php include_once ("inc/hashes.php"); ?>
			
		<a title="Contact us" href="mailto:hashtype@hotmail.com" id="email">hashtype@hotmail.com</a>
		
	</div>