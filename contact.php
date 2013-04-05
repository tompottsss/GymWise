<?PHP
/*
FormMail.php
The program is in two parts:
the first part receives the values form your Form and assigns them to variables.
An email is then sent to the specified address.
The second part creates a simple html response page.

Note that a php script is essentially just anordinary html script with some php statements
embedded within the code using <php  and  ?>  as the start and end php tags.

This program as it is expects that
1.  you have written a Form with  'action=FormMail.php method=post'
2.   your Form contains  3 fields 'name', 'email', and 'message'
	(You can, if you are careful, amend this program to deal with more fields)
3.  your Form contains  a hidden field named 'subject' which conatains the phrase 
you wish to appear in the 'Subject' line of the email that is sent to you

 To use this program as it is you *must* change the next line after these comments
	"you@uwe.ac.uk" must be replaced with your email address
*/

$YourEmail = "tom.potts_207@hotmail.co.uk";

/*
To use the program as it is you do not need to cahnge anything more.
Comments are included to explain what is happening 
(and to note places where you could edit the program.)

The next lines receive the field values from your Form and assign them 
to $variables which are used later on in the program.
You could create more variables to handle
more Form fields - or edit the statements to reflect the names in your Form
The syntax is $variable=$_POST[fieldname];
*/

$name=$_POST[name];
$email=$_POST[email];
$message=$_POST[message];

/* 
The next lines build your email
(You have already assigned a value to 'YourEmail' above.)
 */

$sendto="$YourEmail";
$headers.= "MIME-Version: 1.0\r\n";
$headers.= "Content-type: text/html; ";
$headers.= "charset=iso-8859-1\r\n";
$headers.= "From: $email";
$subject=$_POST[subject];
// Build the email body text
  $emailcontent = " 

Name: $name <br> 
Email: $email <br>
Message: $message <br>
"
/* and the email is sent  later - after we have started the html page 
so that we can include an appropriate message  within the page */
?> 

<!--  HTML PAGE 
Except for the inclusion of php variables and the 'mail' statement
the following is straightforward html code.
You can add more html code but it should be outside the <php .. ?> tags.
-->
<!DOCTYPE html>
<html>

<!-- Head Begins -->
<head>
  <link rel="stylesheet" href="stylesheet.css">
  <script src="contact.js"></script>
</head>
<!-- Head Ends -->


<!-- Body Begins -->
<body onload="initialize()">
  
  
<!-- Wrapper Begins -->
  <section id="wrapper">    
  	
  	
<!-- Header Begins -->
  	<header>
   	  <section id="headText">
   	    <h1>Gym Wise</h1>
   	  </section>
   	  <!-- Nav Begins -->
  	  <nav>
  	  	<ul>
	      <li><a href="index.html">home</a></li>
	      <li><a href="gyms.html">gyms</a></li>
	      <li><a href="compare.html">compare</a></li>
	      <li><a href="data.html">your perfect gym</a></li>
	      <li><a href="contact.html">contact</a></li>
	    </ul>
  	  </nav>
  	  <!-- Nav Ends -->
  	</header>
<!-- Header Ends -->
  	
  	
<!-- Main Section Begins -->
  	  <section id="top">
  	    <h2>Thank you for getting in touch.</h2>
  	  </section>
  	  <section id="contact">
	  <?php
	  	// Send out the email or output an error message 
		if (mail($sendto, $subject, $emailcontent, $headers)) 
		{ 
	  ?>
	  
	  <section id="responce">
	  	<p class="php-response">Thank you <strong><?php echo $name; ?></strong> your email was successfully sent.</p>
  	  	<br />
  	  	<p class="php-response">You sent the following:</p>
		  <p>Name: <strong><?php echo $name; ?></strong></p>
		  <p>e-mail: <strong><?php echo $email; ?> </strong></p>
		  <p>Message: <strong><?php echo $message; ?> </strong></p>
	  </section>
	  
	  <?php
		} 	
		else 
		{ 
		// email send has been unsuccessful
	  ?>
	  
	  <section id="responce">
	  	<p class="php-response">Sorry <strong><?php echo $name; ?></strong> for some reason your e-mail has not been successfully sent.</p>
 	  	<br />
 	  	<p class="php-response">You attempted to send the following:</p>
		  <p>Name: <strong><?php echo $name; ?></strong></p>
		  <p>Email: <strong><?php echo $email; ?> </strong></p>
		  <p>Message: <strong><?php echo $message; ?> </strong></p>
	  	<p class="php-response">Please try again.</p>
	  </section>
	  
	  <?php 
		} 
	  ?>
         
  	  </section>  
<!-- Main Section Ends -->
  	 
  	    	
<!-- Footer Begins -->
  	<footer>
  	  <h1>footer</h1>
  	</footer>
<!-- Footer Ends -->

  	
  </section>
<!-- Wrapper Ends -->

  
</body>
<!-- Body Ends -->

</html>
