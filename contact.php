<?php

$from = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = "ruitech@riarauniversity.ac.ke";
$subject = "Message from Website";

mail ($to, $subject, $message, $from);
header("Location: index.php");
?>