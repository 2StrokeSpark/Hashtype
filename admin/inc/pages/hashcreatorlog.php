<?php if(isset($_SESSION['admin'])){ ?>
<div id="admin_table_admin">
	<h2>Hash creator</h1>
		<table>
			<tr>
				<th>IP</th> 
				<th>Page</th> 
				<th>Useragent</th> 
				<th>Text</th>
				<th>Date</th>
			</tr>

			<?php hashCreatorLog(); ?>	
		</table>
</div>
<?php } ?>