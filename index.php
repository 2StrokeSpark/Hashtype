<?php 
	include_once 'inc/header.php'; 
	include_once 'inc/ads.php'; 
	include_once 'inc/functions.php';
	ipLogInsert();
?>

		<ul id="navbar">
			<li><a title="Home" href="index.php?p=index">Home</a></li>
			<li><a title="Feedback" href="index.php?p=contact">Contact</a></li>
			<li><a title="Admin" href="admin/index.php" id="admin">Admin</a></li>		
		</ul>
	
	
		
		<?php
			if(!empty ($_GET['p'])){
			
				$pages = scandir('inc/pages', 0);
					unset($pages[0], $pages[1]);
					
				$p = $_GET['p'];
				
					if(in_array($p . '.php', $pages)){
					
						include 'inc/pages/' . $p . '.php';
					
					} 
					else{
					
						include 'inc/pages/404.php';
					
					}
			
					
			
			} 
			else{
			
				include('inc/pages/index.php');
			
			}
		?>
		

	
	

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

</body>
</html>