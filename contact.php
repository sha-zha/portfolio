<?php

if(isset($_POST('submit'))){
$name = strip_tags(htmlspecialchars($_POST['name2']));
$email_address = strip_tags(htmlspecialchars($_POST['email2']));
$message = strip_tags(htmlspecialchars($_POST['message2']));

$mailto = 'adeline.servan@gmail.com';

mail();
}     
?>
