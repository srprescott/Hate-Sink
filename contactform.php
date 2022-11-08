<?php

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    
    $mailTo = "info@replacemysink.com";
    $headers = "Email: ".$mailFrom;
    $txt = "Name: ".$subject."\n\n City: ".$city."\n\n Phone: ".$phone."\n\n Email: ".$mailFrom."\n\n Message: ".$message;
    
    mail($mailTo, $subject, $txt, $headers);
    
    header("Location: index.php#about");
}

?>