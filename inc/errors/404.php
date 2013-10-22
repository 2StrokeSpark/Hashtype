<?php include_once ('../header.php');
	  include_once('../ads.php'); 
?>

<div id="container">
	
	<div id="box">
		<a href="/" title="Hashtype"><div id="logo"></div></a>
	
		<p id="404">The requested URL <b><?php echo $_SERVER['REQUEST_URI']; ?></b> were not found on this server.</p>	
		
		</div>
	</div>
</div>


<div id="adsense">
<?php include_once ('../adsense.php'); ?>
</div>

<?php include_once ('../analytics.php'); ?>


</body>
</html>