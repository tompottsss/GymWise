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
	  	  <select>
            <option>select</option> 
		  	<option>fitness first</option>
		  	<option>anytime fitness</option>
		  </select>
  	    </section>
  	    <section id="right">
  	      <select> 
            <option>select</option> 
            <option>fitness first</option> 
            <option>anytime fitness</option> 
          </select>
   	    </section>
   	    <a href="result.php"><input type="submit" value="Submit"></a>
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