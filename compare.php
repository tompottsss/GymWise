<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="stylesheet.css">
  <?php require_once('connect.php'); ?>
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
	      <li><a href="compare.php" class="active">compare</a></li>
	      <li><a href="contact.html">contact</a></li>
	    </ul>
  	  </nav>
  	  <!-- Nav Ends -->
  	</header>
<!-- Header Ends -->

<!-- Main Section Begins -->  	
  	  <section id="top">
  	    <h2><span class="colour">Select</span> your two favourite gyms from the drop down boxes below and <span class="colour">click compare</span></h2>		  
  	  </section>
  	  
<!-- Comparison Section --> 	    
  	  <section id="compare">
   	    
   	    <form action="compare.php" method="post">
	  	<select name="gyms-1">
		  <option value="0">Select Gym</option>  	  	
		  <option value="1">fitness first</option>
		  <option value="2">anytime fitness</option>
		  <option value="3">the gym</option>
		  <option value="4">its leisure ltd</option>
		  <option value="5">the armoury</option>
		  <option value="6">otium health and leisure</option>
		  <option value="7">nuffield health</option>
		  <option value="8">david lloyd leisure</option>
		  <option value="9">lady zone</option>
		  <option value="10">ministry of fitness</option>
		  <option value="11">sundance</option>
	    </select>
		<select name="gyms-2">
		  <option value="0">Select Gym</option>  	  	
		  <option value="1">fitness first</option>
		  <option value="2">anytime fitness</option>
		  <option value="3">the gym</option>
		  <option value="4">its leisure ltd</option>
		  <option value="5">the armoury</option>
		  <option value="6">otium health and leisure</option>
		  <option value="7">nuffield health</option>
		  <option value="8">david lloyd leisure</option>
		  <option value="9">lady zone</option>
		  <option value="10">ministry of fitness</option>
		  <option value="11">sundance</option>
		</select><br />
		<input name="send" id="send" type="submit" value="compare" />
		</form>
  	    
  	    <section id="left">	
		<?php
		$gyms=$_POST['gyms-1'];
		$jimmy=$_POST['gyms-2'];
		
		mysql_select_db("gyms", $con);
		$result = mysql_query("SELECT * FROM gym WHERE id='$gyms'") or die ('Error: '.mysql_error ());
		
			while($row = mysql_fetch_array($result)){
			  echo "<h1>" . $row['name'] . "</h1>";
			  echo "<p><h6>type</h6>" . $row['type'] . "</p>";
			  echo "<p><h6>price</h6>" . $row['price'] . "</p>";
			  echo "<p><h6>hours</h6>" . $row['hours'] . "</p>";
			  echo "<p><h6>parking</h6>" . $row['parking'] . "</p>";
			  echo "<p><h6>facilities</h6>" . $row['facilities'] . "</p>";
			  echo "<h6>click here to see <a href=\"" . $row['url'] . "\">";
			  echo $row['name'] . "</a></h6>";
			  } 
		?>		
  	    </section>
  	    
  	    <section id="right">
  	    <?php
  	    $result2 = mysql_query("SELECT * FROM gym WHERE id='$jimmy'") or die ('Error: '.mysql_error ());

			while($row = mysql_fetch_array($result2)){
			  echo "<h1>" . $row['name'] . "</h1>";
			  echo "<p><h6>type</h6>" . $row['type'] . "</p>";
			  echo "<p><h6>price</h6>" . $row['price'] . "</p>";
			  echo "<p><h6>hours</h6>" . $row['hours'] . "</p>";
			  echo "<p><h6>parking</h6>" . $row['parking'] . "</p>";
			  echo "<p><h6>facilities</h6>" . $row['facilities'] . "</p>";
			  echo "<h6>click here to see <a href=\"" . $row['url'] . "\">";
			  echo $row['name'] . "</a></h6>";
			  } 
		
		mysql_close($con);
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