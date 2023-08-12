<?php


  $name_error = $email_error = $phone_error = $message_error = "";
  $name = $email = $phone = $message = "";
  
  if($-SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["name"])){
	  $name_error = "Name is required";
	  }
	  else{
	   $name = test_input($_POST["name"]);
	  
	   if(!preg_match("/^[a-zA-Z ]*$/",$name)){
	     $name_error = "Only letters and spaces are allowed";
		 }
	   }
  if (empty($_POST["email"])){
    $email_error = "Email is required";
  }
   else{
    $email = test_input($_POST["email"]);

   if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
     &email_error = "Invalid email format";
    }
   }	
   
  if(empty($_POST["phone"])){
    $phone_error = "Phone is required";
    }
   else{
    $phone = test_input($_POST["phone"]);

	if(!preg_match("/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$?1",$phone)){
	     $phone_error = "Invalid phone number";
	  }
	
	}

  if (empty($_POST["message"])) {
        $message_error = "Message is required";
    } else {
        $message = test_input($_POST["message"]);
        $message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');
    }
}	
	
   function test_input($data){
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
     return $data;
   }
   
    $name = $_POST['username'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message']; 
	

?>   