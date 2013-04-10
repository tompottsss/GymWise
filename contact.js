function validate_name(field,alerttxt) <!-- Empty input boxes -->

{
  with (field)
  {
  	
  	var validChars = '^[a-zA-Z\-\']+$';
 	if (value==null||value=="")
      {
      alert(alerttxt);return false;
      }
    
    else if (!field.value.match(validChars)) 
      { 
      <!-- tests for invalid characters -->
	  alert("Your name has invalid characters!");
	  return false;
      }
  	
  	else
      {
      return true;
      }
  }
}

function validate_email(field,alerttxt) 
<!-- correct email validation -->
{
  with (field)
  {
  
  apos=value.indexOf("@");
  dotpos=value.lastIndexOf(".");
  
  if (apos<1||dotpos-apos<2)
    {
    alert(alerttxt);
    return false;
    }
  	
  	else {return true;}
  
  }
}

//* Code for empty enquiry field //*

function validate_required(field,alerttxt)
{
  with (field)
  {
  
  if (value==null||value=="")
    {
    alert(alerttxt);return false;
    }
  	
  	else {return true;}
  }
}

function validate_form(thisform) <!-- This is checked on the onload event -->
{
  with (thisform)
  {
  
  if (validate_name(name,"Your name must be entered!")==false)
    {name.focus();return false;}
  
  if (validate_email(email,"The e-mail address you entered was incorrect!")==false)
    {email.focus();return false;}
  
  if (validate_required(message,"There was no message entered!")==false)
    {message.focus();return false;}
  }
}