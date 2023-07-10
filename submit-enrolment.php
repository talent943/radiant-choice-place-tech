<?php
    if(isset($_POST['email']) && $_POST['email'] != "") {
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            // Get data from form 
            $name = $_POST['name'];
            $email= $_POST['email'];
            $course= $_POST['course'];
            $message= $_POST['message'];
            
            $to = "talentpachena40@gmail.com";
            $subject = "This is the subject line";
            
            // The following text will be sent
            // Name = user entered name
            // Email = user entered email
            // Message = user entered message
            $txt ="Name = ". $name . "\r\n  Email = "
                . $email . "\r\n  Course = "
                . $course . "\r\n Message =" . $message;
            
            $headers = "From: noreply@demosite.com" . "\r\n" .
                        "CC: somebodyelse@example.com";
            if($email != NULL) {
                mail($to, $subject, $txt, $headers);
            }

            $message_sent = true;
        }
        else{
            $message_sent = false;
        }
}
    
    // Redirect to
    header("Location:sent.html");
?>