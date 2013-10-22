<?php if(isset($_SESSION['admin'])){ ?>
<div class="admin_table">
	<h2>Admin</h1>
		<table>
			<tr>
				<th>IP</th> 
				<th>Page</th> 
				<th>Feedback</th>
				<th>Date</th>
			</tr>

			<?php feedbackLog(); ?>	
		</table>
</div>
<?php } ?>