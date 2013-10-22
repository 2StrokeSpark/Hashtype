<div id="box">	
	<div id="contact">
		
			<form action="index.php?p=contact" method="post">
			
				<label>Email</label>
				<input name="email" placeholder="(if you want an answer)">
				
				<label>Message</label>
				 <textarea name="message"></textarea>
				<input type="submit" name="send" value="Send" />
			
		</form>
		
		<?php
		
			if(isset($_POST['send'])){
				
				contactLogInsert();
			
			}
		
		?>
		
	</div>
</div>