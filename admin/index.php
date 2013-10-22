<?php session_start(); 
	  require_once '../inc/functions.php';
      require_once 'inc/header.php';
	  include 	   '../inc/ads.php';
?>

<div id="box">
		
		
		<?php 
			
			if(!isset($_SESSION['admin'])){ ?>
			
		<form id="login" action="index.php" method="post">
			<label>Username</label>
				<input type="text" name="username" autofocus placeholder="Unhackable">
				
			<label>Password</label>
				<input type="password" name="password">
				
			<input type="submit" name="send" value="Login" id="login_button">
			
		</form>
			
	<?php }
			if(isset($_SESSION['admin'])){
				header('Location: adminpage.php');
			}
			
			include ('login.php');
	?>
		
	
	</div>


<div id="adsense">
	<script type="text/javascript"
	src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
	</script>
</div>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-19465139-3']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>



<?php adminloginLogInsert(); ?>

</body>
</html>