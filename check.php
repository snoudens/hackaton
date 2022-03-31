<?php 
$email = $_POST['email'];
$message = $_POST['message'];

$subject = 'the subject';
$headers = 'From: $emailr\nReply-to: $emailr\nContent-type:text/html;charset=utf-8\r\n';

mail("blackstyle174@gmail.com", $subject, $message, $header);
 ?>