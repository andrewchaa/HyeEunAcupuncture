<?php

// get posted data into local variables
$EmailFrom = Trim(stripslashes($_POST['EmailFrom'])); 
$EmailTo = "info@hyeeun-acupuncture.co.uk";
$Subject = "Message from website";
$name = Trim(stripslashes($_POST['name'])); 
$phone = Trim(stripslashes($_POST['phone'])); 
$message = Trim(stripslashes($_POST['message'])); 

// validation
$validationOK=true;
if (Trim($EmailFrom)=="") $validationOK=false;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=oops.html\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "\n";
$Body .= "phone: ";
$Body .= $phone;
$Body .= "\n";
$Body .= "\n";
$Body .= "message: ";
$Body .= $message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=ta.html\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=oops.html\">";
}
?>