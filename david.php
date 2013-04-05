<!DOCTYPE html>
<html>

<!-- Head Begins -->
<head>
  <link rel="stylesheet" href="stylesheet.css">
  <?php require_once('connect.php'); ?>	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
	<script src="http://gsgd.co.uk/sandbox/jquery/easing/jquery.easing.1.3.js"></script>
	<script src="js/slides.min.jquery.js"></script>
	<script>
		$(function(){
			$('#slides').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				play: 5000,
				pause: 2500,
				hoverPause: true
			});
		});
	</script>
</head>
<!-- Head Ends -->


<!-- Body Begins -->
<body>
  
  
<!-- Wrapper Begins -->
  <section id="wrapper">    
  	
  	
<!-- Header Begins -->
  	<header>
   	  <section id="headText">
   	    <h1>gym<span class="colour">W</span>ise</h1>
   	  </section>
   	  <!-- Nav Begins -->
  	  <nav>
  	  	<ul>
	      <li><a href="index.html">home</a></li>
	      <li><a href="map.html">map</a></li>
	      <li><a href="data.html">find</a></li>
	      <li><a href="compare.php">compare</a></li>
	      <li><a href="contact.html">contact</a></li>
	    </ul>
  	  </nav>
  	  <!-- Nav Ends -->
  	</header>
<!-- Header Ends -->
  	
  	
<!-- Main Section Begins -->
  	<section id="top">
  	  <h2>Welcome to
  	  <?php
  	    mysql_select_db("gyms", $con);
  	    $result = mysql_query("SELECT * FROM gym WHERE id='6'") or die ('Error: '.mysql_error ());
  	      while($row = mysql_fetch_array($result)){
	  	    echo $row['name'];
	  	  } 
	  ?>
	  , below is a range of information about the gym.</h2>
  	  </section>
  	  <section id="gymMedia">
  	    <?php
  	      mysql_select_db("gyms", $con);
  	      $result = mysql_query("SELECT * FROM gym WHERE id='6'") or die ('Error: '.mysql_error ());
  	        while($row = mysql_fetch_array($result)){
	  	      echo "<h4>" . $row['name'] . "</h4>";
	  	    } 
	  	?>	  	<div id="container">
		  <div id="example">
			<div id="slides">
				<div class="slides_container">
					<img src="images/david-women.jpg" width="570" height="270" alt="Slide 1"></a>
					<img src="images/david-young.jpg" width="570" height="270" alt="Slide 2"></a>
				</div>
				<a href="#" class="prev"><img src="img/arrow-prev.png" width="24" height="43" alt="Arrow Prev"></a>
				<a href="#" class="next"><img src="img/arrow-next.png" width="24" height="43" alt="Arrow Next"></a>
			</div>
			<img src="img/example-frame.png" width="739" height="341" alt="Example Frame" id="frame">
		  </div>
	    </div>
  	  </section>
  	  <section id="gymDetail">
  	  <?php
	  	mysql_select_db("gyms", $con);
	  	$result = mysql_query("SELECT * FROM gym WHERE id='6'") or die ('Error: '.mysql_error ());
		
		while($row = mysql_fetch_array($result)){
		  echo "<p><h6>location</h6>" . $row['add1'] . ",<br />";
		  echo $row['add2'] . ",<br />Bristol,<br />";
		  echo $row['postcode'] . "</p>";
		  echo "<p><h6>opening times</h6>" . $row['hours'] . "</p>";
		  echo "<p><h6>parking</h6>" . $row['parking'] . "</p>";
		  echo "<p><h6>facilities</h6>" . $row['facilities'] . "</p>";
		} 
	  ?>	    
   	  <section id="gymFooter">
   	    <section id="gymFooterText">
  	      <h8>from &#163;
  	      <?php
  	        mysql_select_db("gyms", $con);
  	        $result = mysql_query("SELECT * FROM gym WHERE id='6'") or die ('Error: '.mysql_error ());
  	          while($row = mysql_fetch_array($result)){
	  	        echo $row['price'];
	  	      } 
	  	  ?>
	  	  per month</h8>
   	    </section>
   	    <?php
  	      mysql_select_db("gyms", $con);
  	      $result = mysql_query("SELECT * FROM gym WHERE id='6'") or die ('Error: '.mysql_error ());
  	        while($row = mysql_fetch_array($result)){
	  	      echo "<a href=\"" . $row['siteURL'] . "\"><section id=\"gymVisit\">";
	  	      echo "<h7>Visit<br />" . $row['name'] . "</a></h7></section></a>";
	  	    } 
	  	?>
   	  </section>
  	</section>
<!-- Main Section Ends -->
  	    
  	    	
<!-- Footer Begins -->
  	<footer>
  	  <section id="footerLeft">
  	    <h5><span class="footer">&#169; 2013 Thomas Potts.</span> All Rights Reserved.</h5>
  	  </section>
  	  <section id="footerRight">
  	    <ul>
  	      <li><a href="index.html">home</a></li>|
	      <li><a href="map.html">map</a></li>|
  	      <li><a href="data.html">find</a></li>|
  	      <li><a href="compare.php">compare</a></li>|
  	      <li><a href="contact.html">contact</a></li>
  	    </ul>
  	  </section> 
  	</footer>
<!-- Footer Ends -->  	
  	
  	
  </section>
<!-- Wrapper Ends -->
  
  
</body>
<!-- Body Ends -->

</html>