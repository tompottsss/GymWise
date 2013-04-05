<?php    
require_once("Calc_class.php"); 

// grab the form values from $_POST hash   
extract($_GET);   

// first compute the output, but only if data has been input   
if(isset($calc)) { // $calc exists as a variable   
    $calc = new Calculator($x,$y,$op); 
    $prod = $calc->calculate(); 
} 

else { // set defaults   
    $x=0;   
    $y=0;   
    $prod=0; 
    $op="*"; 
}   
?>   
<!DOCTYPE html>  
<html>   
    <head>   
        <title>PHP Calculator</title> 
        <style type="text/css"> 
        #calc{margin-top:200px;} 
        h2{font-size:60px;} 
        </style> 
    </head>   

    <body align="center"> 
        <h1>Bad Boi Calc Whaaaa!</h1> 
         
         

        <form method="get" action="<?php print $_SERVER['PHP_SELF']; ?>">               
             
            x = <input type="text" name="x" size="5" value="<?php print $x; ?>"/>   
             
            <select name="op"> 
                <option value="*" <?php if ($op =="*") echo ' selected="selected"';?> >*</option> 
                <option value="+" <?php if ($op =="+") echo ' selected="selected"';?> >+</option> 
                <option value="-" <?php if ($op =="-") echo ' selected="selected"';?> >-</option> 
                <option value="/" <?php if ($op =="/") echo ' selected="selected"';?> >/</option> 
            </select> 
             
            y =  <input type="text" name="y" size="5" value="<?php  print $y; ?>"/>   

            <input type="submit" name="calc" value="Calculate"/>    
        </form> 
        <div id="calc"> 
        <!-- print the result -->   
        <?php  
        if(isset($calc)) {   
            print "<h2>$x $op $y = $prod</h2>";   
        }  
        ?>   
        </div> 
    </body>   
</html> 