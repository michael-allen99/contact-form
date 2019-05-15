<?php

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $emailFrom = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $emailTo = "ma11en@hotmail.co.uk";
    $header = "From ". $emailFrom;
    $txt = "You have received an email from " . $name . ". \n \n " . $message;

    mail($emailTo, $subject, $txt, $header);
    header("Location:index.php?mailsent");
}else {
    echo "Insufficient permissions to access this page";
}






?>