<div id="box">

	<h2>Hash creator</h2>
		
		<div id="hash_creator">
			<form action="index.php?p=hashcreator" method="post" id="hash_creator">
				<select name="hashtype">
				<option value="SHA1" name="sha1">SHA1</option>
				<option value="MD5" name="md5">MD5</option>
				</select>
				
				<input type="text" name="text" id="text" />
				
				<input type="submit" name="send" value="Hash it" />
			</form>
		</div>
		
		<?php
			
			if(isset($_POST['send'])){
			
				$text = $_POST['text'];
				$hashtype = $_POST['hashtype'];
		?>
				
			<p id="hash"><?php echo $hashtype($text); hashCreatorLogInsert(); }?></p>

</div>