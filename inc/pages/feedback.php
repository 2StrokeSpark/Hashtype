<div id="box">

	<h2>Contact</h2>
		
	<div id="contact">
		<form action="index.php?p=contact" method="post">
			<textarea name="contact"></textarea>
			<input type="submit" name="send" value="Send" />
		</form>
		
		<?php
		
			if(isset($_POST['send'])){
				
				contactLogInsert();
			
			}
		
		?>
		
	</div>
</div>