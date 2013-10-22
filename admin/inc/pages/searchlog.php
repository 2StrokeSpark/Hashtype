<?php if(isset($_SESSION['admin'])){ ?>
	<div class="admin_table">
		<h2>Search</h2>
			<table>
				<tr>	
					<th>IP</th> 
					<th>Page</th> 
					<th>Date</th>
			    </tr>
			
			<?php searchLog(); ?>
			
		</table>
	</div>
<?php } ?>