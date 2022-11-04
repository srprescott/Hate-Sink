<?php

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $city = $_POST['city'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];
    
    $mailTo = "info@replacemysink.com" "sara@terraconinstall.com";
    $headers = "Website Contact From: ".$mailFrom;
    $txt = "You have received an email from ".$name.".\n\n".$name .$city .$email .$phone .$message;
    
    mail($mailTo, $subject, $txt, $headers);
    
    header("Location: index.php?mailsend");
}

?>