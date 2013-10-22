<?php 
	session_start();

		if(isset($_SESSION['admin'])){ 
		
		require_once '../inc/functions.php';
		include 'inc/header.php';
		include('../inc/ads.php');
?>


<div id="box">
	
	<div id="nav-menu">
		<ul>
			<li><a href="adminpage.php?p=indexlog">Index</a></li>
			<li><a href="adminpage.php?p=adminlog">Admin</a></li>
			<li><a href="adminpage.php?p=searchlog">Search</a></li>
			<li><a href="adminpage.php?p=hashcreatorlog">Hash creator</a></li>
			<li><a href="adminpage.php?p=feedback">Feedback</a></li>
			<li><a href="adminpage.php?p=logout">Logout</a></li>
		</ul>
	</div>
		<div class="clearer"></div>
		
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
			
				include('inc/pages/indexlog.php');
			
			}
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

<?php } else{
		header('Location: index.php');
		} ?>