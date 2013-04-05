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
	      <li><a href="data.html">see</a></li>
	      <li><a href="compare.php" class="active">compare</a></li>
	      <li><a href="contact.html">contact</a></li>
	    </ul>
  	  </nav>
  	  <!-- Nav Ends -->
  	</header>
<!-- Header Ends -->


<!-- Main Section Begins -->  	
  	  <section id="top">
  	    <h2>Select your two favourite gyms to compare.</h2>
  	  </section>
  	  <!-- Left Selector -->
  	  <section id="compare">
  	    <section id="left">
<!-  	<form action="same.php" method="post">
	  	  <!-- <select name="gyms"> -->
<!--		  	<option>Gym</option>-->	  	  	
		  	<!--
<option value="1">fitness first</option>
		  	<option value="2">anytime fitness</option>
		  </select>
-->
<!-		</form>
		<?php
//		error_reporting(E_ALL);
//		ini_set('display_errors', '1');
		
		mysql_select_db("gyms", $connect);
		
//		$id = 0;
		
//		if (isset($_POST['gyms']))				
//        {
//        $id = $_POST['gyms'];		
//        }
		$result = mysql_query("SELECT * FROM gym WHERE id=1");
		
		while($row = mysql_fetch_array($result))
		  {
		  echo "<h1>";
		  echo $row['name'];
		  echo "</h1>";
		  echo "<h6>Type</h6><p>";
		  echo $row['type'];
		  echo "</p>";
		  echo "<h6>Cheapest monthly price</h6><p>&#163;";
		  echo $row['price'];
		  echo "</p>";
		  echo "<h6>Opening times</h6><p>";
		  echo $row['hours'];
		  echo "</p>";
		  echo "<h6>Parking available</h6><p>";
		  echo $row['parking'];
		  echo "</p>";
		  echo "<h6>Facilities</h6><p>";
		  echo $row['facilities'];
		  echo "</p>";
		  }
		?>
  	    </section>
  	    <section id="right">
  	    <!--
<select> 
          <option>anytime fitness</option> 
          <option>fitness first</option> 
        </select>
-->
  	    <?php		
		mysql_select_db("gyms", $connect);
		
		$result = mysql_query("SELECT * FROM gym WHERE id='2'");
		
		while($row = mysql_fetch_array($result))
		  {
		  echo "<h1>";
		  echo $row['name'];
		  echo "</h1>";
		  echo "<h6>Type</h6><p>";
		  echo $row['type'];
		  echo "</p>";
		  echo "<h6>Cheapest monthly price</h6><p>&#163;";
		  echo $row['price'];
		  echo "</p>";
		  echo "<h6>Opening times</h6><p>";
		  echo $row['hours'];
		  echo "</p>";
		  echo "<h6>Parking available</h6><p>";
		  echo $row['parking'];
		  echo "</p>";
		  echo "<h6>Facilities</h6><p>";
		  echo $row['facilities'];
		  echo "</p>";
		  }
		
		mysql_close($connect);
		?>
  	    </section>
  	    <a href="compare.php"><input type="submit" value="Back"></a>
   	  </section>	  
<!-- Main Section Ends -->

  	
<!-- Footer Begins -->
  	<footer>
  	  <section id="footerLeft">
  	    <h5><span class="footer">&#169; 2012 Thomas Potts.</span> All Rights Reserved.</h5>
  	  </section>
  	  <section id="footerRight">
  	    <ul>
  	      <li><a href="index.html">home</a></li>|
  	      <li><a href="data.html">see</a></li>|
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