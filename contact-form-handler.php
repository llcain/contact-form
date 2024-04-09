
<?php

// variable setting

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];
$subject = 'Message from Contact form!';

$to = 'llcain2012@gmail.com';
$content = "Name : " . $name. "\r\nContact email : " . $email. "\r\nMessage : \r\n \r\n" .$message;

// check input fields

if ( empty($name) || empty($email) || empty($message)) {
    echo "<script type='text/javascript'>alert('Please fill all correct');
    window.histor.go(-1);
    <script>";
}else {
    mail($to,$subject,$content);

    echo "<script type='text/javascript'>alert('Your message sent successfully');
    window.histor.go(-1);
    <script>";
}

?>


