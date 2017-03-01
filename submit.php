<?php 

session_start();

$to       = "hello@brookekaminski.ca";
$name 	  = "";
$email 	  = "";
$subject  = "";
$message  = "";

//$pattern  = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/";

if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["subject"]) && isset($_POST["message"])){
    
    
    $name 	  = trim($_POST["name"]);
    $email 	  = trim($_POST["email"]);
    $subject  = trim($_POST["subject"]);
    $message  = trim($_POST["message"]);


if($name == "" && $email == "" && $message == ""){
    
	    $_SESSION["error"] = "<p>Oops, looks like you forget to fill out the form!</p>";
		header("Location: contact.php");
		die();

}else if($name == ""){
		$_SESSION["error"] = "<p>Don't be shy, let me know who you are!</p>";
		header("Location: contact.php");
		die();

}else if($email == ""){
	   $_SESSION["error"] = "<p>Please fill out your e-mail so I can contact you back!</p>";  
	   header("Location: contact.php");
	   die();
        
}else if($message == ""){
	$_SESSION["error"] = "<p>Why don't you say something so I know why you're contacting me!</p>";
	header("Location: contact.php");
	die();

}else{
    
    if($subject == ""){
	
        $subject = "No Subject";

    }
    
//    $headers = 'From:' .  $email;
    
    $_SESSION['name'] = $name;
    
    
    if (array_key_exists('email', $_POST)) {
	    date_default_timezone_set('Etc/UTC');
        
        require '../PHPMailerAutoload.php';
        
        $mail = new PHPMailer;
        $mail->isSMTP();
	    $mail->Host = 'localhost';
	    $mail->Port = 25;
        
        $mail->setFrom('brookemkaminski@gmail.com', 'Test');
        $mail->addAddress($to, 'Brooke Kaminski');
        
        
        if ($mail->addReplyTo($_POST['email'], $_POST['name'])) {
	        $mail->Subject = $subject;

	        $mail->isHTML(false);

	        $mail->Body = <<<EOT
            
               Email: $email
	           Name: $name
               Subject: $subject
               Message: $message
               EOT;
            
             if (!$mail->send()) {
                 
                  $_SESSION["error"] = "<p>Something went wrong, try again later or maybe email me directly!</p>";  
	              header("Location: contact.php");
	              die();
             }else{
                header("Location: thanks.php"); 
             }     
    }	 // end if mail 

} // end if array exists

} // end if form is valid 
}else{
    $_SESSION["error"] = "<p>Oops! Please fil out the form if you're trying to get in touch!</p>";
    header("Location: contact.php");
    die();
}


?>