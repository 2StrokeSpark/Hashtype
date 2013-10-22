<?php if(isset($_SESSION['admin'])){ ?>
	<div class="admin_table">
		<h2>Index</h2>
			<table>
				<tr>	
					<th>IP</th> 
					<th>Page</th>
					<th>Referer</th>
					<th>Date</th>
			    </tr>
			
			<?php indexLog(); ?>
			
		</table>
	</div>
<?php } ?>