<?php if(isset($_SESSION['admin'])){ ?>
<div id="admin_table_admin">
	<h2>Admin</h1>
		<table>
			<tr>
				<th>IP</th> 
				<th>Username</th> 
				<th>Password</th> 
				<th>Page</th> 
				<th>Useragent</th> 
				<th>Date</th>
			</tr>

			<?php adminLog(); ?>	
		</table>
</div>
<?php } ?>